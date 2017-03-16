<?php

use serz\Framework\Application;

$loader = require '../vendor/autoload.php';
$loader->addPsr4("Mystore\\", dirname(__FILE__) . '/../src/');
$loader->addPsr4("Controllers\\", dirname(__FILE__) . '/../src/Controllers');

//$loaderTwig = new Twig_Loader_Filesystem(dirname(__FILE__) . '/../src/Views');
//$twig = new Twig_Environment($loaderTwig);

//$twig->render('page.html', array('text'=>'Hello world!'));

function debug($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

$app = new Application(require __DIR__ . "/../config/config.php");
$app->start();