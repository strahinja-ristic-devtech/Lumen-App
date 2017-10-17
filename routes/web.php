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

// And here is the one line of code that you forgot to include so you spend your whole day trying to find the error
use Illuminate\Http\Request;



$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('foo', function () use ($router) {
    return 'Hello World';
});

$router->post('user', 'UserController@create');

$router->get('/post/{id}', ['middleware' => 'auth', function (Request $request,$id) {

    $user = $request->user();


    return $user;

    //
}]);

$router->group(['prefix' => 'flight'], function() use ($router)
{
    // Using The "App\Http\Controllers\Admin" Namespace...

    $router->get('/','FlightController@readAll');

    $router->get('{id}','FlightController@readOne');

    $router->post('add','FlightController@create');

    $router->delete('delete/{id}','FlightController@delete');

    $router->put('edit/{id}','FlightController@update');


});




