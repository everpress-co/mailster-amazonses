<?php

namespace Mailster\Aws3\Aws\Api\Parser;

use Mailster\Aws3\Aws\Api\Service;
use Mailster\Aws3\Aws\Result;
use Mailster\Aws3\Aws\CommandInterface;
use Mailster\Aws3\Psr\Http\Message\ResponseInterface;
/**
 * @internal Implements JSON-RPC parsing (e.g., DynamoDB)
 */
class JsonRpcParser extends \Mailster\Aws3\Aws\Api\Parser\AbstractParser
{
    use PayloadParserTrait;
    private $parser;
    /**
     * @param Service    $api    Service description
     * @param JsonParser $parser JSON body builder
     */
    public function __construct(\Mailster\Aws3\Aws\Api\Service $api, \Mailster\Aws3\Aws\Api\Parser\JsonParser $parser = null)
    {
        parent::__construct($api);
        $this->parser = $parser ?: new \Mailster\Aws3\Aws\Api\Parser\JsonParser();
    }
    public function __invoke(\Mailster\Aws3\Aws\CommandInterface $command, \Mailster\Aws3\Psr\Http\Message\ResponseInterface $response)
    {
        $operation = $this->api->getOperation($command->getName());
        $result = null === $operation['output'] ? null : $this->parser->parse($operation->getOutput(), $this->parseJson($response->getBody()));
        return new \Mailster\Aws3\Aws\Result($result ?: []);
    }
}
