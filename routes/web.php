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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'blog', 'namespace' => 'Blog'], function () {
    Route::resource('posts', 'PostController')->names('blog.posts');
});

//Админка


Route::group(['prefix' => 'admin/blog', 'namespace' => 'Blog\Admin'], function (){
    Route::resource('categories', 'CategoryController')
        ->only(['index', 'edit', 'update', 'create', 'store'])
        ->names('blog.admin.categories');
});

