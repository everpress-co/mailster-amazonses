<?php

namespace Mailster\Aws\Rds;

use Mailster\Aws\Credentials\CredentialsInterface;
use Mailster\Aws\Credentials\Credentials;
use Mailster\Aws\Signature\SignatureV4;
use Mailster\GuzzleHttp\Psr7\Request;
use Mailster\GuzzleHttp\Psr7\Uri;
use Mailster\GuzzleHttp\Promise;
use Mailster\Aws;
/**
 * Generates RDS auth tokens for use with IAM authentication.
 */
class AuthTokenGenerator
{
    private $credentialProvider;
    /**
     * The constructor takes an instance of Credentials or a CredentialProvider
     *
     * @param callable|Credentials $creds
     */
    public function __construct($creds)
    {
        if ($creds instanceof \Mailster\Aws\Credentials\CredentialsInterface) {
            $promise = new \Mailster\GuzzleHttp\Promise\FulfilledPromise($creds);
            $this->credentialProvider = \Mailster\Aws\constantly($promise);
        } else {
            $this->credentialProvider = $creds;
        }
    }
    /**
     * Create the token for database login
     *
     * @param string $endpoint The database hostname with port number specified
     *                         (e.g., host:port)
     * @param string $region The region where the database is located
     * @param string $username The username to login as
     *
     * @return string Token generated
     */
    public function createToken($endpoint, $region, $username)
    {
        $uri = new \Mailster\GuzzleHttp\Psr7\Uri($endpoint);
        $uri = $uri->withPath('/');
        $uri = $uri->withQuery('Action=connect&DBUser=' . $username);
        $request = new \Mailster\GuzzleHttp\Psr7\Request('GET', $uri);
        $signer = new \Mailster\Aws\Signature\SignatureV4('rds-db', $region);
        $provider = $this->credentialProvider;
        $url = (string) $signer->presign($request, $provider()->wait(), '+15 minutes')->getUri();
        // Remove 2 extra slash from the presigned url result
        return \substr($url, 2);
    }
}
