<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WorkRecordsController;
use App\Http\Controllers\AuthenticationController;

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
Route::get('login', [AuthenticationController::class, 'login']);

Route::post("login", [AuthenticationController::class, 'loginStore']);

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('users', [UsersController::class, 'index']);

Route::get('workrecords', [WorkRecordsController::class, 'index']);

Route::get('workrecords/create', [WorkRecordsController::class, 'create']);

Route::post('workrecords/create', [WorkRecordsController::class, 'createStore']);

Route::get('workrecords/{id}', [WorkRecordsController::class, 'details']);

Route::post('workrecords/{id}', [WorkRecordsController::class, 'detailsStore']);
