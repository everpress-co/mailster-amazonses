<?php

namespace Mailster\Aws\Api\Parser;

use Mailster\Aws\Api\Service;
use Mailster\Aws\Api\StructureShape;
use Mailster\Aws\Result;
use Mailster\Aws\CommandInterface;
use Mailster\Psr\Http\Message\ResponseInterface;
use Mailster\Psr\Http\Message\StreamInterface;
/**
 * @internal Parses query (XML) responses (e.g., EC2, SQS, and many others)
 */
class QueryParser extends \Mailster\Aws\Api\Parser\AbstractParser
{
    use PayloadParserTrait;
    /** @var bool */
    private $honorResultWrapper;
    /**
     * @param Service   $api                Service description
     * @param XmlParser $xmlParser          Optional XML parser
     * @param bool      $honorResultWrapper Set to false to disable the peeling
     *                                      back of result wrappers from the
     *                                      output structure.
     */
    public function __construct(\Mailster\Aws\Api\Service $api, \Mailster\Aws\Api\Parser\XmlParser $xmlParser = null, $honorResultWrapper = \true)
    {
        parent::__construct($api);
        $this->parser = $xmlParser ?: new \Mailster\Aws\Api\Parser\XmlParser();
        $this->honorResultWrapper = $honorResultWrapper;
    }
    public function __invoke(\Mailster\Aws\CommandInterface $command, \Mailster\Psr\Http\Message\ResponseInterface $response)
    {
        $output = $this->api->getOperation($command->getName())->getOutput();
        $xml = $this->parseXml($response->getBody(), $response);
        if ($this->honorResultWrapper && $output['resultWrapper']) {
            $xml = $xml->{$output['resultWrapper']};
        }
        return new \Mailster\Aws\Result($this->parser->parse($output, $xml));
    }
    public function parseMemberFromStream(\Mailster\Psr\Http\Message\StreamInterface $stream, \Mailster\Aws\Api\StructureShape $member, $response)
    {
        $xml = $this->parseXml($stream, $response);
        return $this->parser->parse($member, $xml);
    }
}
