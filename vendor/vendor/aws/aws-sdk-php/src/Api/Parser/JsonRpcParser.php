<?php

namespace Mailster\Aws\Api\Parser;

use Mailster\Aws\Api\StructureShape;
use Mailster\Aws\Api\Service;
use Mailster\Aws\Result;
use Mailster\Aws\CommandInterface;
use Mailster\Psr\Http\Message\ResponseInterface;
use Mailster\Psr\Http\Message\StreamInterface;
/**
 * @internal Implements JSON-RPC parsing (e.g., DynamoDB)
 */
class JsonRpcParser extends \Mailster\Aws\Api\Parser\AbstractParser
{
    use PayloadParserTrait;
    /**
     * @param Service    $api    Service description
     * @param JsonParser $parser JSON body builder
     */
    public function __construct(\Mailster\Aws\Api\Service $api, \Mailster\Aws\Api\Parser\JsonParser $parser = null)
    {
        parent::__construct($api);
        $this->parser = $parser ?: new \Mailster\Aws\Api\Parser\JsonParser();
    }
    public function __invoke(\Mailster\Aws\CommandInterface $command, \Mailster\Psr\Http\Message\ResponseInterface $response)
    {
        $operation = $this->api->getOperation($command->getName());
        $result = null === $operation['output'] ? null : $this->parseMemberFromStream($response->getBody(), $operation->getOutput(), $response);
        return new \Mailster\Aws\Result($result ?: []);
    }
    public function parseMemberFromStream(\Mailster\Psr\Http\Message\StreamInterface $stream, \Mailster\Aws\Api\StructureShape $member, $response)
    {
        return $this->parser->parse($member, $this->parseJson($stream, $response));
    }
}
