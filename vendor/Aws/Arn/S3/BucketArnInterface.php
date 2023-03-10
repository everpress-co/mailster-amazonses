<?php

namespace Mailster\Aws3\Aws\Arn\S3;

use Mailster\Aws3\Aws\Arn\ArnInterface;
/**
 * @internal
 */
interface BucketArnInterface extends ArnInterface
{
    public function getBucketName();
}
