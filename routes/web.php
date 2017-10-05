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

use App\Task;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function(){
    echo 'Hola sóc la HOME';
});

Route::get('tasks','TaskController@index');

Route::get('createFakeTasks', function (){
    factory(Task::class,50)->create();
});

// Cruddy by desifn CRUD: Create Update Retrieve Delete
//Route::post
//Route::put
//Route::delete
