<?php

namespace Mailster\Aws\ClientSideMonitoring\Exception;

use Mailster\Aws\HasMonitoringEventsTrait;
use Mailster\Aws\MonitoringEventsInterface;
/**
 * Represents an error interacting with configuration for client-side monitoring.
 */
class ConfigurationException extends \RuntimeException implements \Mailster\Aws\MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
