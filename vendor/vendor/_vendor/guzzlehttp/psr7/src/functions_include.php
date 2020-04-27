<?php

namespace Mailster;

// Don't redefine the functions if included multiple times.
if (!\function_exists('Mailster\\GuzzleHttp\\Psr7\\str')) {
    require __DIR__ . '/functions.php';
}
