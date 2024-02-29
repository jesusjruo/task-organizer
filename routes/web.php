<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Http\Response;
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

Route::get('/', function () {
  return redirect()->route('tasks.index');
});

// Using groups for controllers (TaskController)
Route::controller(TaskController::class)->group(function ()  {
  Route::get('/tasks','viewAllTasks')->name('tasks.index');
  Route::view('/tasks/create','create')->name('tasks.create');
  Route::get('/tasks/{task}' , 'viewTask')->name('tasks.show');
  Route::get('/tasks/{task}/edit' , 'editTask')->name('tasks.edit');
  Route::put('/tasks/{task}' , 'updateTask')->name('tasks.update');
  Route::post('/tasks' , 'createTask')->name('tasks.store');
});

// Without using groups for controller
// Route::get('/tasks', [TaskController::class , 'viewAllTasks'])->name('tasks');
// Straight view route (This is better to avoid create an endpoint in the controller for just a view call)
// Route::view('/tasks/create' , 'create')->name('tasks.create');
// Route::get('/tasks/{id}', [TaskController::class , 'viewTask'])->name('tasks.show');
// Route::post('/tasks' , [TaskController::class ,'createTask'])->name('tasks.store');

//The method fallback() from the class Route allows us to do something if the URL doesn't match any route.
Route::fallback(function() {
    return redirect('/');
});

//php artisan tinker let's run laravel queries in the console