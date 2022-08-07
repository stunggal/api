<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// make api variables available to all routes



$router->get('/', function () use ($router) {
    // return $router->app->version();
    // get data from api variable in environment file
    $api = env('API_LINK');
    $data = file_get_contents($api);
    // decode json to array
    $data = json_decode($data, true);
    // return data to view
    // return $data;
    return view('dashboard.index', ['data' => $data]);
});
