<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
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
   if (Auth::check()) {
       return redirect('/dashboard');
   }
    return view('index');
})->name('login');
// Route::view('login', 'index');
Route::post('/login', [LoginController::class, 'authenticatee']);

// Route::view('register', 'register');
Route::post('/register', [RegisterController::class,'reg']);

// Route::post('/register', [RegisterController::class, 'reg']);
/* Rough views for testing yield and section in laravel
Route::view('master', 'layouts/master');
Route::view('rgh', 'rough'); */
// Route::view('master', 'layouts/master');
// Route::view('rgh', 'rough');

// Route::view('dashboard', 'Dashboard');


// Route::post('/dashboard', function () {
//     if (Auth::check()) {
//         # code...
//         return
//     }

// });



// Route::view('product', 'product');
// Route::view('edit', 'edit');

Route::get('/product/{id}', [ProductController::class,'getProductById']);

// Route::get('/edit', [ProductController::class,'edit']);
Route::get('/edit/{id}', [ProductController::class,'edit']);
Route::post('/update', [ProductController::class,'update'])->name('product.update');
Route::get('delete/{id}', [ProductController::class,'delete']);

// Route::view('vg', 'rh');

// For logging out
Route::get('/logout',[LoginController::class,'logout']);

Route::group(['middleware' => ['auth']],function(){
    Route::post('/dashboard', [ProductController::class, 'store']);
    Route::get('/dashboard', [ProductController::class, 'show']);
});
