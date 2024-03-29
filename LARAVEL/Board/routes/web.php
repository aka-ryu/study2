<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/list', [TaskController::class, 'index'])->name('list.index');
Route::get('/search', [TaskController::class, 'search'])->name('list.search');
Route::post('/list', [TaskController::class, 'store'])->name('task.store');
Route::get('/detail/{task}', [TaskController::class, 'show']);
Route::get('/edit/{task}', [TaskController::class, 'edit']);
Route::put('/detail/{task}', [TaskController::class, 'update'])->name('task.update');
Route::delete('/detail/{task}', [TaskController::class, 'destroy'])->name('task.destroy');
Route::resource('tasks', TaskController::class);


