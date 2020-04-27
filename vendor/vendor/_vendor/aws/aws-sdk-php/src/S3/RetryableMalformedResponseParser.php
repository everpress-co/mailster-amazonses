<?php

namespace Mailster\Aws\S3;

use Mailster\Aws\Api\Parser\AbstractParser;
use Mailster\Aws\Api\StructureShape;
use Mailster\Aws\Api\Parser\Exception\ParserException;
use Mailster\Aws\CommandInterface;
use Mailster\Aws\Exception\AwsException;
use Mailster\Psr\Http\Message\ResponseInterface;
use Mailster\Psr\Http\Message\StreamInterface;
/**
 * Converts malformed responses to a retryable error type.
 *
 * @internal
 */
class RetryableMalformedResponseParser extends \Mailster\Aws\Api\Parser\AbstractParser
{
    /** @var string */
    private $exceptionClass;
    public function __construct(callable $parser, $exceptionClass = \Mailster\Aws\Exception\AwsException::class)
    {
        $this->parser = $parser;
        $this->exceptionClass = $exceptionClass;
    }
    public function __invoke(\Mailster\Aws\CommandInterface $command, \Mailster\Psr\Http\Message\ResponseInterface $response)
    {
        $fn = $this->parser;
        try {
            return $fn($command, $response);
        } catch (\Mailster\Aws\Api\Parser\Exception\ParserException $e) {
            throw new $this->exceptionClass("Error parsing response for {$command->getName()}:" . " AWS parsing error: {$e->getMessage()}", $command, ['connection_error' => \true, 'exception' => $e], $e);
        }
    }
    public function parseMemberFromStream(\Mailster\Psr\Http\Message\StreamInterface $stream, \Mailster\Aws\Api\StructureShape $member, $response)
    {
        return $this->parser->parseMemberFromStream($stream, $member, $response);
    }
}
