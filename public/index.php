<?php

<<<<<<< HEAD
use Illuminate\Contracts\Http\Kernel;
=======
use Illuminate\Foundation\Application;
>>>>>>> fab252cd18bcfceab780219b2d8d8f7fbae6f7b4
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

<<<<<<< HEAD
=======
// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

>>>>>>> fab252cd18bcfceab780219b2d8d8f7fbae6f7b4
// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
<<<<<<< HEAD
$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
=======
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
>>>>>>> fab252cd18bcfceab780219b2d8d8f7fbae6f7b4
