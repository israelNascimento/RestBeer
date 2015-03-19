<?php
/**
 * Created by PhpStorm.
 * User: israel
 * Date: 17/03/15
 * Time: 21:58
 */

require_once 'bootstrap.php';


$app->get('/', function() use($app){

    return $app['twig']->render('index.twig', array());


});

$app->run();
