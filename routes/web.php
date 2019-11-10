<?php

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

Route::resource('todos','TodoController')->names([
    'index'  => 'todo.index' ,
    'create' => 'todo.create',
    'store'  => 'todo.store' ,
    'show'   => 'todo.show'  ,
    'edit'   => 'todo.edit'  ,
    'update' => 'todo.update',
    'destroy'=> 'todo.destroy'
]);

