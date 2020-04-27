<?php

namespace Mailster\Aws\S3;

use Mailster\Aws\Api\Parser\AbstractParser;
use Mailster\Aws\Api\StructureShape;
use Mailster\Aws\CommandInterface;
use Mailster\Aws\Exception\AwsException;
use Mailster\Psr\Http\Message\ResponseInterface;
use Mailster\Psr\Http\Message\StreamInterface;
/**
 * Converts errors returned with a status code of 200 to a retryable error type.
 *
 * @internal
 */
class AmbiguousSuccessParser extends \Mailster\Aws\Api\Parser\AbstractParser
{
    private static $ambiguousSuccesses = ['UploadPartCopy' => \true, 'CopyObject' => \true, 'CompleteMultipartUpload' => \true];
    /** @var callable */
    private $errorParser;
    /** @var string */
    private $exceptionClass;
    public function __construct(callable $parser, callable $errorParser, $exceptionClass = \Mailster\Aws\Exception\AwsException::class)
    {
        $this->parser = $parser;
        $this->errorParser = $errorParser;
        $this->exceptionClass = $exceptionClass;
    }
    public function __invoke(\Mailster\Aws\CommandInterface $command, \Mailster\Psr\Http\Message\ResponseInterface $response)
    {
        if (200 === $response->getStatusCode() && isset(self::$ambiguousSuccesses[$command->getName()])) {
            $errorParser = $this->errorParser;
            $parsed = $errorParser($response);
            if (isset($parsed['code']) && isset($parsed['message'])) {
                throw new $this->exceptionClass($parsed['message'], $command, ['connection_error' => \true]);
            }
        }
        $fn = $this->parser;
        return $fn($command, $response);
    }
    public function parseMemberFromStream(\Mailster\Psr\Http\Message\StreamInterface $stream, \Mailster\Aws\Api\StructureShape $member, $response)
    {
        return $this->parser->parseMemberFromStream($stream, $member, $response);
    }
}
