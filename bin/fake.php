#!/usr/bin/env php
<?php

if (!$loader = require(__DIR__.'/../vendor/autoload.php')) {
    die('install composer deps first');
}

use Symfony\Component\Console;
use digitalkaoz\WordpressFaker;

$app = new Console\Application('wordpress-faker', 0.1);
$app->add(new WordpressFaker\Command\WordpressFakerCommand(new WordpressFaker\WordpressPersister()));

$app->run(new Console\Input\ArgvInput(), new Console\Output\ConsoleOutput());
