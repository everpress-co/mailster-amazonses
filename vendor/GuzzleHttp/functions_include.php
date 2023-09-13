<?php

namespace Mailster\Aws3;

// Don't redefine the functions if included multiple times.
if (!\function_exists('Mailster\\Aws3\\GuzzleHttp\\describe_type')) {
    require __DIR__ . '/functions.php';
}
