<?php

namespace Mailster\Aws3\Aws\Exception;

use Mailster\Aws3\Aws\HasMonitoringEventsTrait;
use Mailster\Aws3\Aws\MonitoringEventsInterface;
class CredentialsException extends \RuntimeException implements MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
