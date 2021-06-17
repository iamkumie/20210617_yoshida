<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

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
Route::get('/', [TasksController::class, 'index']);
Route::get('/todo/create', [TasksController::class, 'add']);
Route::post('/todo/create', [TasksController::class, 'create']);
Route::get('/todo/update', [TasksController::class, 'edit']);
Route::post('/todo/update', [TasksController::class, 'update']);
Route::get('/todo/delete', [TasksController::class, 'delete']);
Route::post('/todo/delete', [TasksController::class, 'remove']);
