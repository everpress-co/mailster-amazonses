<?php

namespace Mailster\Aws\S3\RegionalEndpoint\Exception;

use Mailster\Aws\HasMonitoringEventsTrait;
use Mailster\Aws\MonitoringEventsInterface;
/**
 * Represents an error interacting with configuration for sts regional endpoints
 */
class ConfigurationException extends \RuntimeException implements \Mailster\Aws\MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
