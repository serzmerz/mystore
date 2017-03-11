<?php
/**
 * Created by PhpStorm.
 * User: serz
 * Date: 11.03.17
 * Time: 18:08
 */
$loader = require '../vendor/autoload.php';
$loader->addPsr4("Mystore\\",dirname(__FILE__).'/../src/');

function debug($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}
$app = new \serz\Framework\Application(require __DIR__ . "/../config/config.php");
$app->start();