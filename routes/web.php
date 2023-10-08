<?php

use App\Http\Controllers\TodolistController;
use Illuminate\Support\Facades\Route;

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

Route::controller(TodolistController::class)->group(function(){
    Route::post('/store/todo', 'StoreTodo')->name('store.todo');
    Route::get('/all/todo', 'AllTodo')->name('all.todo');
    Route::get('/edit/todo/{id}', 'EditTodo')->name('edit.list');
    Route::post('/update/todo', 'UpdateTodo')->name('update.list');
    Route::get('/delete/todo/{id}', 'DeleteTodo')->name('delete.list');
});


Route::get('/', function () {
    return view('index');
})->name('frontend.index');