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

$controller = 'ProxyController@handle';

$router->get('/{any:.*}', ['as'=>'root.proxy.get', 'uses'=>$controller]);
$router->post('/{any:.*}', ['as'=>'root.proxy.post', 'uses'=>$controller]);