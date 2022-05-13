<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SzakdogaController;
use App\Http\Controllers\UserController;


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

Route::get('/dashboard', [SzakdogaController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::post('/dashboard', [SzakdogaController::class, 'store']);

require __DIR__ . '/auth.php';

require __DIR__ . '/auth.php';
