<?php

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

/** @var \Laravel\Lumen\Routing\Router $router */
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => '/users', 'namespace' => 'Users'], function() use ($router) {
    $router->get('/', ['as' => 'api.users.search', 'uses' => 'SearchController']);
    $router->post('/', ['as' => 'api.users.create', 'uses' => 'CreateController']);
    $router->get('/{User}', ['as' => 'api.users.search', 'uses' => 'FindController']);
    $router->post('/users/consumers', ['as', 'api.users.consumers.create', 'uses' => 'Consumer/CreateController']);
});
