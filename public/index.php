<?php

use App\Router;
use App\Controllers\HomeController;
use App\Controllers\CsvContentController;
use App\Action;

require_once __DIR__ . '/../vendor/autoload.php';

define('VIEW_PATH', __DIR__ . '/../views');
define('STORAGE_PATH', __DIR__ . '/../storage');

$router = new Router();

$router
    ->register('/', new Action(App\Controllers\HomeController::class, 'index'))
    ->register('/content', new Action(App\Controllers\CsvContentController::class, 'csvContent'));

echo $router->resolve($_SERVER['REQUEST_URI']);

echo '<pre>';
var_dump($_FILES);
echo '</pre>';
$filePath = STORAGE_PATH . '/' . $_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], $filePath);
echo '<pre>';
var_dump(pathinfo($filePath));
echo '</pre>';