<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});
// Route::view('login', 'index');
Route::post('login', [LoginController::class, 'authenticatee']);

Route::view('register', 'register');
Route::post('/register', [RegisterController::class,'reg']);

// Route::post('/register', [RegisterController::class, 'reg']);
/* Rough views for testing yield and section in laravel
Route::view('master', 'layouts/master');
Route::view('rgh', 'rough'); */
// Route::view('master', 'layouts/master');
// Route::view('rgh', 'rough');

Route::view('dashboard', 'Dashboard');


Route::post('/dashboard', [ProductController::class,'store']);
Route::get('/dashboard', [ProductController::class, 'show']);


Route::view('product', 'product');
