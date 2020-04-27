<?php

namespace Mailster;

// Don't redefine the functions if included multiple times.
if (!\function_exists('Mailster\\GuzzleHttp\\uri_template')) {
    require __DIR__ . '/functions.php';
}
