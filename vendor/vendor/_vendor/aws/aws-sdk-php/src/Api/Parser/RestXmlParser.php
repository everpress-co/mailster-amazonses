<?php

namespace Mailster\Aws\Api\Parser;

use Mailster\Aws\Api\StructureShape;
use Mailster\Aws\Api\Service;
use Mailster\Psr\Http\Message\ResponseInterface;
use Mailster\Psr\Http\Message\StreamInterface;
/**
 * @internal Implements REST-XML parsing (e.g., S3, CloudFront, etc...)
 */
class RestXmlParser extends \Mailster\Aws\Api\Parser\AbstractRestParser
{
    use PayloadParserTrait;
    /**
     * @param Service   $api    Service description
     * @param XmlParser $parser XML body parser
     */
    public function __construct(\Mailster\Aws\Api\Service $api, \Mailster\Aws\Api\Parser\XmlParser $parser = null)
    {
        parent::__construct($api);
        $this->parser = $parser ?: new \Mailster\Aws\Api\Parser\XmlParser();
    }
    protected function payload(\Mailster\Psr\Http\Message\ResponseInterface $response, \Mailster\Aws\Api\StructureShape $member, array &$result)
    {
        $result += $this->parseMemberFromStream($response->getBody(), $member, $response);
    }
    public function parseMemberFromStream(\Mailster\Psr\Http\Message\StreamInterface $stream, \Mailster\Aws\Api\StructureShape $member, $response)
    {
        $xml = $this->parseXml($stream, $response);
        return $this->parser->parse($member, $xml);
    }
}
