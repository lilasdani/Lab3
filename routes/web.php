<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', TaskController::class)->where(['id' => '[0-9]+']);
// Route::resource('tasks', TaskController::class)->only('index','show','create');
// Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
// Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');


// Route::controller(TaskController::class)->prefix('tasks')->group(function () {
//     Route::get('/', 'index')->name('index');
//     Route::get('/create','create')->name('create');
//     Route::get('/{id}', 'show')->name('show');
//     Route::post('/', 'store')->name('store');
//     Route::put('/{id}', 'update')->name('update');
// });

