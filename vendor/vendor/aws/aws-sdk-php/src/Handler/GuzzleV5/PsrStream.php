<?php

namespace Mailster\Aws\Handler\GuzzleV5;

use Mailster\GuzzleHttp\Stream\StreamDecoratorTrait;
use Mailster\GuzzleHttp\Stream\StreamInterface as GuzzleStreamInterface;
use Mailster\Psr\Http\Message\StreamInterface as Psr7StreamInterface;
/**
 * Adapts a Guzzle 5 Stream to a PSR-7 Stream.
 *
 * @codeCoverageIgnore
 */
class PsrStream implements \Mailster\Psr\Http\Message\StreamInterface
{
    use StreamDecoratorTrait;
    /** @var GuzzleStreamInterface */
    private $stream;
    public function __construct(\Mailster\GuzzleHttp\Stream\StreamInterface $stream)
    {
        $this->stream = $stream;
    }
    public function rewind()
    {
        $this->stream->seek(0);
    }
    public function getContents()
    {
        return $this->stream->getContents();
    }
}
