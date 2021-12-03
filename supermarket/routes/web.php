<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('products/trashed', 'ProductController@trashedProducts')
->name('product.trash');
Route::resource('products', 'ProductController');

Route::get('products/soft/delete/{id}', 'ProductController@softDelete')
->name('soft.delete');



Route::get('products/back/from/trash/{id}', 'ProductController@backFromSoftDelete')
->name('product.back.from.trash');

Route::get('products/delete/from/database/{id}', 'ProductController@deleteForEver')
->name('product.delete.from.database');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
