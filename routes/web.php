<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


//Global Middleware(kernel>$middleware)
Route::get('/user', [UserController::class, 'users'])->name('user.user');
Route::get('/contacts', [UserController::class, 'contacts'])->name('user.contacts');
Route::get('/about', [UserController::class, 'abouts'])->name('user.about');
