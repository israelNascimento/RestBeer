<?php
/**
 * Created by PhpStorm.
 * User: israel
 * Date: 17/03/15
 * Time: 21:58
 */

require_once '../vendor/autoload.php';
use Silex\Application;


$app=new Application();
$app['debug']=true;
$app->register(new \Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__.'/../views/'));

$app['cervejas']=array(
    'marcas'=>['Heineken','Guinness','Skol','Colorado'],
    'estilos'=>['Pilsen','Stout']
);


return $app;