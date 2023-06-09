<?php

use App\Http\Controllers\welcome;
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

Route::get('/', [welcome::class, 'index']);
Route::post('/create', [welcome::class, 'registerUser']);
Route::post('/preregister', [welcome::class, 'preregister']);
