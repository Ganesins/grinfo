<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\NewsController;
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
Route::get('/',[TaskController::class,'list1']);
Route::post('insert',[TaskController::class,'insert']);
Route::get('list',[NewsController::class,'list']);
Route::get('list1',[TaskController::class,'list1']);
Route::get('delete/{id}',[TaskController::class,'delete']);
// Route::get('delete/{id}',[NewsController::class,'delete']);

