<?php

namespace Mailster\Aws3;

// Don't redefine the functions if included multiple times.
if (!\function_exists('Mailster\\Aws3\\GuzzleHttp\\Psr7\\str')) {
    require __DIR__ . '/functions.php';
}
