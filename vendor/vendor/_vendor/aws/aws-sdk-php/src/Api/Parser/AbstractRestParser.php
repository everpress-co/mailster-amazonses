<?php

namespace Mailster\Aws\Api\Parser;

use Mailster\Aws\Api\DateTimeResult;
use Mailster\Aws\Api\Shape;
use Mailster\Aws\Api\StructureShape;
use Mailster\Aws\Result;
use Mailster\Aws\CommandInterface;
use Mailster\Psr\Http\Message\ResponseInterface;
/**
 * @internal
 */
abstract class AbstractRestParser extends \Mailster\Aws\Api\Parser\AbstractParser
{
    use PayloadParserTrait;
    /**
     * Parses a payload from a response.
     *
     * @param ResponseInterface $response Response to parse.
     * @param StructureShape    $member   Member to parse
     * @param array             $result   Result value
     *
     * @return mixed
     */
    protected abstract function payload(\Mailster\Psr\Http\Message\ResponseInterface $response, \Mailster\Aws\Api\StructureShape $member, array &$result);
    public function __invoke(\Mailster\Aws\CommandInterface $command, \Mailster\Psr\Http\Message\ResponseInterface $response)
    {
        $output = $this->api->getOperation($command->getName())->getOutput();
        $result = [];
        if ($payload = $output['payload']) {
            $this->extractPayload($payload, $output, $response, $result);
        }
        foreach ($output->getMembers() as $name => $member) {
            switch ($member['location']) {
                case 'header':
                    $this->extractHeader($name, $member, $response, $result);
                    break;
                case 'headers':
                    $this->extractHeaders($name, $member, $response, $result);
                    break;
                case 'statusCode':
                    $this->extractStatus($name, $response, $result);
                    break;
            }
        }
        if (!$payload && $response->getBody()->getSize() > 0 && \count($output->getMembers()) > 0) {
            // if no payload was found, then parse the contents of the body
            $this->payload($response, $output, $result);
        }
        return new \Mailster\Aws\Result($result);
    }
    private function extractPayload($payload, \Mailster\Aws\Api\StructureShape $output, \Mailster\Psr\Http\Message\ResponseInterface $response, array &$result)
    {
        $member = $output->getMember($payload);
        if (!empty($member['eventstream'])) {
            $result[$payload] = new \Mailster\Aws\Api\Parser\EventParsingIterator($response->getBody(), $member, $this);
        } else {
            if ($member instanceof \Mailster\Aws\Api\StructureShape) {
                // Structure members parse top-level data into a specific key.
                $result[$payload] = [];
                $this->payload($response, $member, $result[$payload]);
            } else {
                // Streaming data is just the stream from the response body.
                $result[$payload] = $response->getBody();
            }
        }
    }
    /**
     * Extract a single header from the response into the result.
     */
    private function extractHeader($name, \Mailster\Aws\Api\Shape $shape, \Mailster\Psr\Http\Message\ResponseInterface $response, &$result)
    {
        $value = $response->getHeaderLine($shape['locationName'] ?: $name);
        switch ($shape->getType()) {
            case 'float':
            case 'double':
                $value = (float) $value;
                break;
            case 'long':
                $value = (int) $value;
                break;
            case 'boolean':
                $value = \filter_var($value, \FILTER_VALIDATE_BOOLEAN);
                break;
            case 'blob':
                $value = \base64_decode($value);
                break;
            case 'timestamp':
                try {
                    if (!empty($shape['timestampFormat']) && $shape['timestampFormat'] === 'unixTimestamp') {
                        $value = \Mailster\Aws\Api\DateTimeResult::fromEpoch($value);
                    }
                    $value = new \Mailster\Aws\Api\DateTimeResult($value);
                    break;
                } catch (\Exception $e) {
                    // If the value cannot be parsed, then do not add it to the
                    // output structure.
                    return;
                }
            case 'string':
                try {
                    if ($shape['jsonvalue']) {
                        $value = $this->parseJson(\base64_decode($value), $response);
                    }
                    // If value is not set, do not add to output structure.
                    if (!isset($value)) {
                        return;
                    }
                    break;
                } catch (\Exception $e) {
                    //If the value cannot be parsed, then do not add it to the
                    //output structure.
                    return;
                }
        }
        $result[$name] = $value;
    }
    /**
     * Extract a map of headers with an optional prefix from the response.
     */
    private function extractHeaders($name, \Mailster\Aws\Api\Shape $shape, \Mailster\Psr\Http\Message\ResponseInterface $response, &$result)
    {
        // Check if the headers are prefixed by a location name
        $result[$name] = [];
        $prefix = $shape['locationName'];
        $prefixLen = \strlen($prefix);
        foreach ($response->getHeaders() as $k => $values) {
            if (!$prefixLen) {
                $result[$name][$k] = \implode(', ', $values);
            } elseif (\stripos($k, $prefix) === 0) {
                $result[$name][\substr($k, $prefixLen)] = \implode(', ', $values);
            }
        }
    }
    /**
     * Places the status code of the response into the result array.
     */
    private function extractStatus($name, \Mailster\Psr\Http\Message\ResponseInterface $response, array &$result)
    {
        $result[$name] = (int) $response->getStatusCode();
    }
}
