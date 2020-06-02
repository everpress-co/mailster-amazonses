<?php

namespace Mailster\Aws3\Aws\Api\Parser;

use Mailster\Aws3\Aws\CommandInterface;
use Mailster\Aws3\Aws\Exception\AwsException;
use Mailster\Aws3\Psr\Http\Message\ResponseInterface;
use Mailster\Aws3\GuzzleHttp\Psr7;
/**
 * @internal Decorates a parser and validates the x-amz-crc32 header.
 */
class Crc32ValidatingParser extends \Mailster\Aws3\Aws\Api\Parser\AbstractParser
{
    /** @var callable */
    private $parser;
    /**
     * @param callable $parser Parser to wrap.
     */
    public function __construct(callable $parser)
    {
        $this->parser = $parser;
    }
    public function __invoke(\Mailster\Aws3\Aws\CommandInterface $command, \Mailster\Aws3\Psr\Http\Message\ResponseInterface $response)
    {
        if ($expected = $response->getHeaderLine('x-amz-crc32')) {
            $hash = hexdec(\Mailster\Aws3\GuzzleHttp\Psr7\hash($response->getBody(), 'crc32b'));
            if ($expected != $hash) {
                throw new \Mailster\Aws3\Aws\Exception\AwsException("crc32 mismatch. Expected {$expected}, found {$hash}.", $command, ['code' => 'ClientChecksumMismatch', 'connection_error' => true, 'response' => $response]);
            }
        }
        $fn = $this->parser;
        return $fn($command, $response);
    }
}
