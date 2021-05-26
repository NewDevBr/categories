<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{CategorieController, ProductController};

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
    return view('index');
});

Route::get('/categories/delete/{id}', [CategorieController::class, "destroy"]);
Route::get('/categories/edit/{id}', [CategorieController::class, "edit"]);
Route::post('/categories/update/{id}', [CategorieController::class, "update"]);
Route::post('/categories/new', [CategorieController::class, "store"]);
Route::get('/categories/new', [CategorieController::class, "create"]);
Route::get('/categories', [CategorieController::class, "index"]);

Route::get('/products', [ProductController::class, "index"]);

Route::post('/products/new', [ProductController::class, "store"]);
Route::get('/products/new', [ProductController::class, "create"]);
Route::get('/products/edit/{id}', [ProductController::class, "edit"]);
Route::post('/products/edit/{id}', [ProductController::class, "update"]);
Route::get('/products/delete/{id}', [ProductController::class, "destroy"]);
