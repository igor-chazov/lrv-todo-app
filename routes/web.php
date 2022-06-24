<?php

use App\Http\Controllers\TodoController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
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

Route::get('/', static fn() => view('welcome'));
Route::get('/todo/create', [TodoController::class, 'create']);
Route::post('/todo/submit', [TodoController::class, 'store']);
Route::get('/todo/{id}', [TodoController::class, 'show']);
Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
