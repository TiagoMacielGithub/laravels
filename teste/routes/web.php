<?php

use App\Http\Controllers\uploadController;
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

Route::get('/index', [uploadController::class, 'index']);

Route::get('/upload', [uploadController::class, 'create']);

Route::post('/any', [uploadController::class, 'store'])->name('process');
