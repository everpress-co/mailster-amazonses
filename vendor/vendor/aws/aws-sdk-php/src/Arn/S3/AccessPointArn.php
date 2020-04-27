<?php

namespace Mailster\Aws\Arn\S3;

use Mailster\Aws\Arn\AccessPointArn as BaseAccessPointArn;
use Mailster\Aws\Arn\ArnInterface;
use Mailster\Aws\Arn\Exception\InvalidArnException;
/**
 * @internal
 */
class AccessPointArn extends \Mailster\Aws\Arn\AccessPointArn implements \Mailster\Aws\Arn\ArnInterface
{
    /**
     * Validation specific to AccessPointArn
     *
     * @param array $data
     */
    protected static function validate(array $data)
    {
        parent::validate($data);
        if ($data['service'] !== 's3') {
            throw new \Mailster\Aws\Arn\Exception\InvalidArnException("The 3rd component of an S3 access" . " point ARN represents the region and must be 's3'.");
        }
    }
}
