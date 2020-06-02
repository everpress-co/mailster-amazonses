<?php

namespace Mailster\Aws3\Aws\Api\Parser;

use Mailster\Aws3\Aws\Api\Service;
use Mailster\Aws3\Aws\Api\StructureShape;
use Mailster\Aws3\Psr\Http\Message\ResponseInterface;
/**
 * @internal Implements REST-JSON parsing (e.g., Glacier, Elastic Transcoder)
 */
class RestJsonParser extends \Mailster\Aws3\Aws\Api\Parser\AbstractRestParser
{
    use PayloadParserTrait;
    /** @var JsonParser */
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
    protected function payload(\Mailster\Aws3\Psr\Http\Message\ResponseInterface $response, \Mailster\Aws3\Aws\Api\StructureShape $member, array &$result)
    {
        $jsonBody = $this->parseJson($response->getBody());
        if ($jsonBody) {
            $result += $this->parser->parse($member, $jsonBody);
        }
    }
}
