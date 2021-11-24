<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\MainController;
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

Route::get('/', [LoginController::class, 'callView']);

Route::get('/sign-up', [SignUpController::class, 'callView']);

Route::get('/albuns', [MainController::class, 'albuns'] );

Route::get('/todos', function () {
    return view('app.todos.todos');
});
Route::get('/posts', function () {
    return view('app.posts.todos');
});
Route::get('/users', function () {
    return view('app.users.users');
});
