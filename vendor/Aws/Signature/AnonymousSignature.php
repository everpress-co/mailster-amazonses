<?php

namespace Mailster\Aws3\Aws\Signature;

use Mailster\Aws3\Aws\Credentials\CredentialsInterface;
use Mailster\Aws3\Psr\Http\Message\RequestInterface;
/**
 * Provides anonymous client access (does not sign requests).
 */
class AnonymousSignature implements \Mailster\Aws3\Aws\Signature\SignatureInterface
{
    public function signRequest(\Mailster\Aws3\Psr\Http\Message\RequestInterface $request, \Mailster\Aws3\Aws\Credentials\CredentialsInterface $credentials)
    {
        return $request;
    }
    public function presign(\Mailster\Aws3\Psr\Http\Message\RequestInterface $request, \Mailster\Aws3\Aws\Credentials\CredentialsInterface $credentials, $expires)
    {
        return $request;
    }
}
