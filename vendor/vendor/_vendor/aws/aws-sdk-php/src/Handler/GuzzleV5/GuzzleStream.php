<?php

namespace Mailster\Aws\Handler\GuzzleV5;

use Mailster\GuzzleHttp\Stream\StreamDecoratorTrait;
use Mailster\GuzzleHttp\Stream\StreamInterface as GuzzleStreamInterface;
use Mailster\Psr\Http\Message\StreamInterface as Psr7StreamInterface;
/**
 * Adapts a PSR-7 Stream to a Guzzle 5 Stream.
 *
 * @codeCoverageIgnore
 */
class GuzzleStream implements \Mailster\GuzzleHttp\Stream\StreamInterface
{
    use StreamDecoratorTrait;
    /** @var Psr7StreamInterface */
    private $stream;
    public function __construct(\Mailster\Psr\Http\Message\StreamInterface $stream)
    {
        $this->stream = $stream;
    }
}
