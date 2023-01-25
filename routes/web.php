<?php

use App\Http\Controllers\Angular_Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Angular_Controller::class, 'index'])->name('index');
Route::get('/start', [Angular_Controller::class, 'show'])->name('start');
Route::post('/start', [Angular_Controller::class, 'store'])->name('start.post');
Route::get('/start_result', [Angular_Controller::class, 'update'])->name('start_result');

