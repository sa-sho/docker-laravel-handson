<?php

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

Route::get('/', [App\Http\Controllers\PostsController::class, 'index'])
->name('top');
Route::resource('posts', 'App\Http\Controllers\PostsController', ['only' => [
    'create', 'store'
    ]]);

Route::resource('posts', 'App\Http\Controllers\PostsController', ['only' => [
    'create', 'store', 'show'
    ]]);
    
Route::resource('comments', 'App\Http\Controllers\CommentsController', ['only' => [
    'store'
    ]]);

Route::resource('posts', 'App\Http\Controllers\PostsController', ['only' => [
    'create', 'store', 'show', 'edit', 'update'
    ]]);

Route::middleware('auth')->group(function(){
Route::resource('posts', 'App\Http\Controllers\PostsController', ['only' => [
    'create', 'store', 'edit', 'update', 'destroy'
    ]]);
});

Route::get('/home',function () {
    return view('home');
});

Route::get('/register', [App\Http\Controllers\RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store'])
    ->middleware('guest');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])
    ->middleware('guest')
    ->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate'])
    ->middleware('guest');

Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
