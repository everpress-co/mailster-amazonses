<?php

namespace Mailster\Aws\Api\Parser;

use Mailster\Aws\Api\Service;
use Mailster\Aws\Api\StructureShape;
use Mailster\Aws\CommandInterface;
use Mailster\Aws\ResultInterface;
use Mailster\Psr\Http\Message\ResponseInterface;
use Mailster\Psr\Http\Message\StreamInterface;
/**
 * @internal
 */
abstract class AbstractParser
{
    /** @var \Aws\Api\Service Representation of the service API*/
    protected $api;
    /** @var callable */
    protected $parser;
    /**
     * @param Service $api Service description.
     */
    public function __construct(\Mailster\Aws\Api\Service $api)
    {
        $this->api = $api;
    }
    /**
     * @param CommandInterface  $command  Command that was executed.
     * @param ResponseInterface $response Response that was received.
     *
     * @return ResultInterface
     */
    public abstract function __invoke(\Mailster\Aws\CommandInterface $command, \Mailster\Psr\Http\Message\ResponseInterface $response);
    public abstract function parseMemberFromStream(\Mailster\Psr\Http\Message\StreamInterface $stream, \Mailster\Aws\Api\StructureShape $member, $response);
}
