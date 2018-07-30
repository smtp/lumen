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
$router->get('/', [
    'uses' => 'AuthController@login',
    'as' => 'index'
]);
$router->get('logout', [
    'uses' => 'AuthController@logout',
    'as' => 'pages.logout'
]);

//user routes
$router->get('dashboard', [
    'uses' => 'UserController@dashboard',
    'as' => 'pages.dashboard'
]);

$router->get('sign-up', [
    'uses' => 'UserController@signUp',
    'as' => 'pages.sign-up'
]);

$router->get('create', [
    'uses' => 'UserController@create',
    'as' => 'create'
]);

$router->get('deposit', [
    'uses' => 'UserController@deposit',
    'as' => 'pages.deposit'
]);

$router->get('notifications', [
    'uses' => 'UserController@notifications',
    'as' => 'pages.notifications'
]);

$router->get('user', [
    'uses' => 'UserController@user',
    'as' => 'pages.user'
]);
