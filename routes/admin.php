<?php

Route::prefix('/admin')->group(function(){
    Route::get('/', 'Admin\DashboardController@getDashboard');
    Route::get('/users', 'userController@index');


    //MÃ³dulo de productos
    Route::get('/products', 'ProductController@index');
    Route::get('/products/add', 'ProductController@getProductAdd');
     Route::post('/products/add', [
        'uses' => 'ProductController@postProductAdd',
        'as' => 'products.store'
    ]);

    //MÃ³dulo de categories
    Route::get('/categories', 'Admin\CategoriesController@getHome');
});
