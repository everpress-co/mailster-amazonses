<?php

namespace Mailster\Aws\ClientSideMonitoring;

use Mailster\Aws\CommandInterface;
use Mailster\Aws\Exception\AwsException;
use Mailster\Aws\ResultInterface;
use Mailster\GuzzleHttp\Psr7\Request;
use Mailster\Psr\Http\Message\RequestInterface;
/**
 * @internal
 */
interface MonitoringMiddlewareInterface
{
    /**
     * Data for event properties to be sent to the monitoring agent.
     *
     * @param RequestInterface $request
     * @return array
     */
    public static function getRequestData(\Mailster\Psr\Http\Message\RequestInterface $request);
    /**
     * Data for event properties to be sent to the monitoring agent.
     *
     * @param ResultInterface|AwsException|\Exception $klass
     * @return array
     */
    public static function getResponseData($klass);
    public function __invoke(\Mailster\Aws\CommandInterface $cmd, \Mailster\Psr\Http\Message\RequestInterface $request);
}
