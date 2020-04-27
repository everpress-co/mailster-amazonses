<?php

namespace Mailster\Aws\Polly;

use Mailster\Aws\Api\Serializer\JsonBody;
use Mailster\Aws\AwsClient;
use Mailster\Aws\Signature\SignatureV4;
use Mailster\GuzzleHttp\Psr7\Request;
use Mailster\GuzzleHttp\Psr7\Uri;
use Mailster\GuzzleHttp\Psr7;
/**
 * This client is used to interact with the **Amazon Polly** service.
 * @method \Aws\Result deleteLexicon(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLexiconAsync(array $args = [])
 * @method \Aws\Result describeVoices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVoicesAsync(array $args = [])
 * @method \Aws\Result getLexicon(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLexiconAsync(array $args = [])
 * @method \Aws\Result getSpeechSynthesisTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSpeechSynthesisTaskAsync(array $args = [])
 * @method \Aws\Result listLexicons(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLexiconsAsync(array $args = [])
 * @method \Aws\Result listSpeechSynthesisTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSpeechSynthesisTasksAsync(array $args = [])
 * @method \Aws\Result putLexicon(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLexiconAsync(array $args = [])
 * @method \Aws\Result startSpeechSynthesisTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startSpeechSynthesisTaskAsync(array $args = [])
 * @method \Aws\Result synthesizeSpeech(array $args = [])
 * @method \GuzzleHttp\Promise\Promise synthesizeSpeechAsync(array $args = [])
 */
class PollyClient extends \Mailster\Aws\AwsClient
{
    /** @var JsonBody */
    private $formatter;
    /**
     * Create a pre-signed URL for Polly operation `SynthesizeSpeech`
     *
     * @param array $args parameters array for `SynthesizeSpeech`
     *                    More information @see Aws\Polly\PollyClient::SynthesizeSpeech
     *
     * @return string
     */
    public function createSynthesizeSpeechPreSignedUrl(array $args)
    {
        $uri = new \Mailster\GuzzleHttp\Psr7\Uri($this->getEndpoint());
        $uri = $uri->withPath('/v1/speech');
        // Formatting parameters follows rest-json protocol
        $this->formatter = $this->formatter ?: new \Mailster\Aws\Api\Serializer\JsonBody($this->getApi());
        $queryArray = \json_decode($this->formatter->build($this->getApi()->getOperation('SynthesizeSpeech')->getInput(), $args), \true);
        // Mocking a 'GET' request in pre-signing the Url
        $query = \Mailster\GuzzleHttp\Psr7\build_query($queryArray);
        $uri = $uri->withQuery($query);
        $request = new \Mailster\GuzzleHttp\Psr7\Request('GET', $uri);
        $request = $request->withBody(\Mailster\GuzzleHttp\Psr7\stream_for(''));
        $signer = new \Mailster\Aws\Signature\SignatureV4('polly', $this->getRegion());
        return (string) $signer->presign($request, $this->getCredentials()->wait(), '+15 minutes')->getUri();
    }
}
