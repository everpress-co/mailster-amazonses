<?php

namespace Mailster\Aws\Exception;

use Mailster\Aws\HasMonitoringEventsTrait;
use Mailster\Aws\MonitoringEventsInterface;
class InvalidJsonException extends \RuntimeException implements \Mailster\Aws\MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
