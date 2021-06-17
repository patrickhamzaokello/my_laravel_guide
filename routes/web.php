<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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


//Laravell 8 (new)
Route::get('/products', [ProductsController::class, 'index']);

//pattern is integer
// Route::get('/products/{id}', [ProductsController::class, 'show'])->where('id','[0-9]+');

//pattern is String
// Route::get('/products/{name}', [ProductsController::class, 'show'])->where('name','[a-zA-Z]+');
Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])->where([
    'name' => '[a-z]+',
    'id' => '[0-9]+'
]);