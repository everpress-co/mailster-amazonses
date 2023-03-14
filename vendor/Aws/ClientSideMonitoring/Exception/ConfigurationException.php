<?php

namespace Mailster\Aws3\Aws\ClientSideMonitoring\Exception;

use Mailster\Aws3\Aws\HasMonitoringEventsTrait;
use Mailster\Aws3\Aws\MonitoringEventsInterface;
/**
 * Represents an error interacting with configuration for client-side monitoring.
 */
class ConfigurationException extends \RuntimeException implements MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
