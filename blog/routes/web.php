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

$setApi = '/api';
$gym = '/gym';
$user = '/user';



$router->post($setApi . $gym . '/register', ['uses' => 'gymController@create']);

$router->get($setApi . $gym . '/show', ['uses' => 'gymController@showAll']);