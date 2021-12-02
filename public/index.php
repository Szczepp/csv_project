<?php

use App\Router;
use App\Home;
use App\CsvContent;
use App\Action;

require_once __DIR__ . '/../vendor/autoload.php';

define('VIEW_PATH', __DIR__ . '/../views');
define('STORAGE_PATH', __DIR__ . '/../storage');

$router = new Router();

$router
    ->register('/', new Action(App\Home::class, 'index'))
    ->register('/content', new Action(App\CsvContent::class, 'csvContent'));

echo $router->resolve($_SERVER['REQUEST_URI']);