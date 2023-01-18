<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WorkRecordsController;
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
})->name('welcome');

Route::get('workrecords', [WorkRecordsController::class, 'index']);

Route::get('workrecords/create', [WorkRecordsController::class, 'create']);

Route::post('workrecords/create', [WorkRecordsController::class, 'store']);

Route::get('workrecords/{id}', [WorkRecordsController::class, 'details']);
