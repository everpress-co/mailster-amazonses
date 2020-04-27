<?php

namespace Mailster;

// Don't redefine the functions if included multiple times.
if (!\function_exists('Mailster\\GuzzleHttp\\Promise\\promise_for')) {
    require __DIR__ . '/functions.php';
}
