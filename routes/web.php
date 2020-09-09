<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/logout', [
    'uses' => 'Auth\LoginController@logout',
    'as' => 'users.logout'
]);


Route::get('/vestidos-a-medida', [
    'uses' => 'VestidosAMedidaController@index',
    'as' => 'usersvestidosmedida'
]);

Route::get('/getCarrito', [
    'uses' => 'CarritoController@index',
    'as' => 'users.carrito'
]);

Route::get('/borrarPedido/{id}', [
    'uses' => 'CarritoController@destroy',
    'as' => 'carrito.borrarPedido'
]);

Route::get('/vestidos-a-medida-dos', [
    'uses' => 'VestidosAMedidaController@create',
    'as' => 'users.create'
]);

Route::get('/detalle-de-compra', [
    'uses' => 'VestidosAMedidaController@preView',
    'as' => 'users.preView'
]);

Route::get('/carrito', [
    'uses' => 'CarritoController@carrito',
    'as' => 'users.carrito'
]);

Route::post('/carrito-de-compra', [
    'uses' => 'VestidosAMedidaController@store',
    'as' => 'users.store'
]);


/* Route::get('/vestidos-a-medida-dos', function () {
    return view('vestidos-dos');
}); */
/* 
Route::get('/detalle-de-compra', function () {
    return view('detalle-de-compra');
}); */

Route::get('/clientes', function () {
    return view('customers');
});

Route::get('/asesoramiento', function () {
    return view('asesoramiento');
});

Route::get('/somos-misia', function () {
    return view('we-are-misia');
});

Route::get('/contacto', function () {
    return view('contact');
});

Route::get('/mi-cuenta', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

    /*users*/
    Route::get('/users', [
        'uses' => 'UserController@index',
        'as' => 'users.main'
    ]);
    
    Route::get('/users/show/{id}', [
        'uses' => 'UserController@show',
        'as' => 'users.show'
    ]);
    Route::get('/users/edit/{id}', [
        'uses' => 'UserController@edit',
        'as' => 'users.edit'
    ]);
    Route::post('/users/update/{id}', [
        'uses' => 'UserController@update',
        'as' => 'users.update'
    ]);
    Route::get('/users/editpassword/{id}', [
        'uses' => 'UserController@editpassword',
        'as' => 'users.editpassword'
    ]);
    Route::post('/users/updatepassword/{id}', [
        'uses' => 'UserController@updatepassword',
        'as' => 'users.updatepassword'
    ]);
    Route::get('/users/destroy/{id}', [
        'uses' => 'UserController@destroy',
        'as' => 'users.destroy'
    ]);
    
    Route::get('/users/create', [
        'uses' => 'UserController@create',
        'as' => 'users.create'
    ]);
    Route::post('/users/store', [
        'uses' => 'UserController@store',
        'as' => 'users.store'
    ]);
  


/*producto*/
    Route::get('/products', 'ProductController@getHome');

    
    Route::get('/config', [
        'uses' => 'ProductController@config',
        'as' => 'admin.config'
    ]);

    Route::post('/config/store', [
        'uses' => 'ProductController@storeConfig',
        'as' => 'products.storeConfig'
    ]);

    /*paypal*/
    Route::get('/paypal/pay', 'PaymentController@payWithPayPal');
    Route::get('/paypal/status', 'PaymentController@payPalStatus');
