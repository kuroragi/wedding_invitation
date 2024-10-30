<?php

use App\Http\Controllers\Controller;
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

Route::get('/marriage/{id}/{bride}/{guest}', [Controller::class, 'index']);
Route::get('/marriage/generate_guest/{id}/{bride}', [Controller::class, 'generate_guest']);
