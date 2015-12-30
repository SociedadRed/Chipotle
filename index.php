<?php
// Constants
define('__ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);

require_once __ROOT.DS.'vendor'.DS.'autoload.php';

use Silex\Application;
$app = new Application();
// Please set to false in a production environment
$app['debug'] = true;

$app->get('/{bar}', function($bar) use($app) { 
    return 'Foo - '.$app->escape($bar); 
})->value('bar', 'something');

$app->run();