<?php

/**
 * SPDX-License-Identifier: EUPL-1.2
 * Author: Jérémy Dufraisse 2023
 * 
 * File used to test running Pico
 */

// define `Pico` class to correspond to `LehyenSkang\Pico`
// chose the class defined by LehyenSkangApp
// (composer/autoloaded knowing where the file is)
use LehyenSkangApp\Pico;

// load `autoloader` defined by `composer`
if (is_file(__DIR__ . '/vendor/autoload.php')) {
    include_once(__DIR__ . '/vendor/autoload.php');
}

// catch exception (Throwable)
try {
    // construct a `Pico` object with default params
    $pp = new Pico(
        __DIR__,
        'vendor/picocms/pico/content-sample/',  // content dir
        'vendor/picocms/plugins/', // plugins dir
        'vendor/picocms/themes/'   // themes dir
    );
    // run Pico and echoes the output
    echo ($pp)->run();
} catch (Throwable $th) {
    // in case of excepion, output a string representation of message and
    // localization of the trouble
    echo $th->__toString();
}

