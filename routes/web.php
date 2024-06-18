<?php

use App\Http\Controllers\manageController;
use App\Http\Controllers\validationController;
use App\Http\Middleware\checkRollMiddleware;
use App\Http\Middleware\validationMiddleware;
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
    return view('welcome');
});

Route::get('/login', function () {
    return view('task1');
});

Route::post('/checkIn',[validationController::class,"valid"])->middleware([validationMiddleware::class,checkRollMiddleware::class]);




Route::resource('todo',manageController::class);
