<?php

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

Route::get('/',                                 'BlogController@showHome');
Route::get('/articulo/{id}',                    'BlogController@showPost');
Route::get('/articulos',                        'BlogController@searchPosts');
Route::get('/nosotros',                         'PagesController@showAbout');
Route::get('/contacto',                         'PagesController@showContact');


// ADMIN:

Route::middleware(['auth'])->group(function () {
    
    Route::get('/admin', function () {
        return redirect('/admin/articulos');
    });

    Route::get('/admin/articulos',                  'PostController@showList');
    Route::get('/admin/articulos/crear',            'PostController@showCreate');
    Route::post('/admin/articulos/crear',           'PostController@store');
    Route::get('/admin/articulos/{id}/editar',      'PostController@showEdit');
    Route::post('/admin/articulos/{id}/editar',     'PostController@update');
    Route::get('/admin/articulos/{id}/eliminar',    'PostController@delete');

    Route::post('/admin/comentarios/crear',         'CommentController@store');
    
});


Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');