<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('hello-world', function () {
    return view('hello-world');
});

Route::get('profile-page', function () {
    return view('profile-page');
});

Route::get('index', function () {
    return view('index');
});

Route::resource('posts', PostController::class);

Route::resource('users', UserController::class);

require __DIR__ . '/auth.php';
