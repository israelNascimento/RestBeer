<?php
/**
 * Created by PhpStorm.
 * User: israel
 * Date: 17/03/15
 * Time: 21:58
 */

require_once 'bootstrap.php';



$app->mount('/cervejas', include'cervejas.php');
$app->mount('/estilos', include 'estilos.php');

$app->run();
