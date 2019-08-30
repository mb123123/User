<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('comments', CommentsController::class);
    $router->resource('articlepublication', Article_publicationController::class);

    // $router->resource('users', UsersController::class);


    // $router->resource('article', ArticleController::class);

    $router->resource('Testssss', TestssssController::class);
    
    
    
});
