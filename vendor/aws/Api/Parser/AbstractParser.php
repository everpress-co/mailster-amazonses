<?php

namespace Mailster\Aws3\Aws\Api\Parser;

use Mailster\Aws3\Aws\Api\Service;
use Mailster\Aws3\Aws\CommandInterface;
use Mailster\Aws3\Aws\ResultInterface;
use Mailster\Aws3\Psr\Http\Message\ResponseInterface;
/**
 * @internal
 */
abstract class AbstractParser
{
    /** @var \Aws\Api\Service Representation of the service API*/
    protected $api;
    /**
     * @param Service $api Service description.
     */
    public function __construct(\Mailster\Aws3\Aws\Api\Service $api)
    {
        $this->api = $api;
    }
    /**
     * @param CommandInterface  $command  Command that was executed.
     * @param ResponseInterface $response Response that was received.
     *
     * @return ResultInterface
     */
    public abstract function __invoke(\Mailster\Aws3\Aws\CommandInterface $command, \Mailster\Aws3\Psr\Http\Message\ResponseInterface $response);
}
