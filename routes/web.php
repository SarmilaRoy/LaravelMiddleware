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
// Route::get('/user', [UserController::class, 'users'])->name('user.user');
// Route::get('/contacts', [UserController::class, 'contacts'])->name('user.contacts');
// Route::get('/about', [UserController::class, 'abouts'])->name('user.about');


//Route Middleware(kernel>$routeMiddleware)

//Protected
Route::get('/contacts', [UserController::class, 'contacts'])->name('user.contacts')->middleware('routemid');
Route::get('/about', [UserController::class, 'abouts'])->name('user.about')->middleware('routemid');


Route::get('/login', function () {
    session()->put('user_id',1);
    return redirect('user');
});

Route::get('/logout', function () {
    session()->forget('user_id',1);
    return redirect()->back();
});

Route::get('/user', [UserController::class, 'users'])->name('user.user');



Route::get('/no-access', function () {
    return 'you are not allow to access the page';
    die;
});


