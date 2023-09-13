<?php

namespace Mailster\Aws3\GuzzleHttp;

use Mailster\Aws3\Psr\Http\Message\MessageInterface;
interface BodySummarizerInterface
{
    /**
     * Returns a summarized message body.
     */
    public function summarize(MessageInterface $message) : ?string;
}
