<?php

namespace Mailster\Aws\Signature;

use Mailster\Aws\Credentials\CredentialsInterface;
use Mailster\Psr\Http\Message\RequestInterface;
/**
 * Provides anonymous client access (does not sign requests).
 */
class AnonymousSignature implements \Mailster\Aws\Signature\SignatureInterface
{
    public function signRequest(\Mailster\Psr\Http\Message\RequestInterface $request, \Mailster\Aws\Credentials\CredentialsInterface $credentials)
    {
        return $request;
    }
    public function presign(\Mailster\Psr\Http\Message\RequestInterface $request, \Mailster\Aws\Credentials\CredentialsInterface $credentials, $expires, array $options = [])
    {
        return $request;
    }
}
