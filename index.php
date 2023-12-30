<?php

/**
 * SPDX-License-Identifier: EUPL-1.2
 * Author: Jérémy Dufraisse 2023
 */

use LehyenSkang\Pico;

if (is_file(__DIR__ . '/vendor/autoload.php')) {
    include_once(__DIR__ . '/vendor/autoload.php');
}

try {
    $pp = new Pico(
        __DIR__,
        'vendor/picocms/pico/content-sample/',  // content dir
        'vendor/picocms/plugins/', // plugins dir
        'vendor/picocms/themes/'   // themes dir
    );
    echo ($pp)->run();
} catch (Throwable $th) {
    echo $th->__toString();
}

