<?php

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\TodoController;

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

Route::get('/hello', function (){
    echo "Hello World";
});

Route::get("hello/{name}", function($nama){
    echo "Hallo {$nama}, anda sedang belajar laravel, mudah bukan ? bukan.";
});

Route::get("/todo", [TodoController::class, "index"]);

Route::delete('/todo/{id}', [TodoController::class, 'destroy'])->name('todo.destroy');

Route::get("/todo/create", [TodoController::class, "create"])->name("todo.create");
Route::post("/todo", [TodoController::class, "store"])->name("todo.store");

Route::get("/todo/{id}", [TodoController::class, "edit"]);
Route::put("/todo/{id}", [TodoController::class, "update"])->name("todo.update");