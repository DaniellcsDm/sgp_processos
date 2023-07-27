<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\UserTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\ProcessInformationController;
use App\Http\Controllers\ProcessFileController;
use App\Http\Controllers\SelectorController;
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
Route::middleware('auth')->group(function () {
    Route::resource('modules', ModuleController::class);

    Route::resource('user-types', UserTypeController::class);

    Route::resource('users', UserController::class);

    Route::resource('selectors', SelectorController::class);

    Route::resource('clients', ClientController::class);

    Route::resource('lawyers', LawyerController::class);

    Route::resource('processes', ProcessController::class);

    Route::resource('process-informations', ProcessInformationController::class);

    Route::resource('process-files', ProcessFileController::class);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Auth::routes();