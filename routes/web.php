<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StrategyController;

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
Route::get('/develop', [\App\Http\Controllers\DevelopController::class, 'action']);
Route::get('/singleton', [\App\Http\Controllers\SingletonController::class, 'action']);
Route::get('/strategy', [StrategyController::class, 'action']);
Route::get('/simple-factory', [\App\Http\Controllers\SimpleFactoryController::class, 'action']);
Route::get('/factory-method', [\App\Http\Controllers\FactoryMethodController::class, 'action']);
