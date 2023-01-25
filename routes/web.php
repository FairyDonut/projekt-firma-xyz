<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WorkRecordsController;
use App\Http\Controllers\WorkRecordCommentsController;
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

Route::get('login', [AuthenticationController::class, 'login'])->name('login');

Route::post('login', [AuthenticationController::class, 'loginStore']);

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');

    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('users', [UsersController::class, 'index'])->middleware('role:Admin')->name('users');

    Route::get('users/create', [UsersController::class, 'create'])->middleware('role:Admin')->name('usersCreate');

    Route::post('users/create', [UsersController::class, 'createStore'])->middleware('role:Admin');

    Route::get('users/{id}', [UsersController::class, 'details'])->middleware('role:Admin')->name('usersDetails');

    Route::post('users/{id}', [UsersController::class, 'detailsStore'])->middleware('role:Admin');

    Route::post('users/{id}/delete', [WorkRecordsController::class, 'deleteStore'])->middleware('role:Admin');

    Route::get('workrecords', [WorkRecordsController::class, 'index'])->middleware('role:Admin,Manager,Worker')->name('workrecords');

    Route::get('workrecords/create', [WorkRecordsController::class, 'create'])->middleware('role:Admin,Manager')->name('workrecordsCreate');

    Route::post('workrecords/create', [WorkRecordsController::class, 'createStore'])->middleware('role:Admin,Manager');

    Route::get('workrecords/{id}', [WorkRecordsController::class, 'details'])->middleware('role:Admin,Manager,Worker')->name('workrecordsDetails');

    Route::post('workrecords/{id}', [WorkRecordsController::class, 'detailsStore'])->middleware('role:Admin,Manager');

    Route::post('workrecords/{id}/delete', [WorkRecordsController::class, 'deleteStore'])->middleware('role:Admin,Manager');

    Route::post('workrecords/{id}/comment', [WorkRecordCommentsController::class, 'createStore'])->middleware('role:Admin,Manager,Worker');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
