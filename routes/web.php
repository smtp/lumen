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

$router->get('auth', 'AuthController@auth');
$router->get('/', 'AuthController@login');
$router->get('logout', 'AuthController@logout');
$router->get('dashboard', [
    'uses' => 'UserController@dashboard',
    'as' => 'dashboard'
]);
