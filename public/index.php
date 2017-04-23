<?php

use Serz\Framework\Application;

$loader = require '../vendor/autoload.php';
$loader->addPsr4("Mystore\\", dirname(__FILE__) . '/../src/');
$loader->addPsr4("Controllers\\", dirname(__FILE__) . '/../src/Controllers');

function debug($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

$app = new Application(require __DIR__ . "/../config/config.php");
$app->start();