<?php

namespace Mailster\Aws3\Aws\Sts\RegionalEndpoints\Exception;

use Mailster\Aws3\Aws\HasMonitoringEventsTrait;
use Mailster\Aws3\Aws\MonitoringEventsInterface;
/**
 * Represents an error interacting with configuration for sts regional endpoints
 */
class ConfigurationException extends \RuntimeException implements MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
