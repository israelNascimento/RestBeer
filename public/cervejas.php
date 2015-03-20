<?php
/**
 * Created by PhpStorm.
 * User: israel
 * Date: 19/03/15
 * Time: 20:50
 */

require_once 'bootstrap.php';

$cervejas=$app['controllers_factory'];

$cervejas->get('/', function() use($app){


    return $app['twig']->render('cervejas.twig', array('cervejas'=>implode(', ', $app['cervejas']['marcas'])));
});

return $cervejas;