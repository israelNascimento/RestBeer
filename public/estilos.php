<?php
/**
 * Created by PhpStorm.
 * User: israel
 * Date: 19/03/15
 * Time: 20:50
 */
require_once 'bootstrap.php';

$estilos=$app['controllers_factory'];

$estilos->get('/', function() use($app){


    return $app['twig']->render('estilos.twig', array('estilos'=>implode(', ', $app['cervejas']['estilos'])));
});

return $estilos;