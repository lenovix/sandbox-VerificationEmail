<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'get_login'])->name('login');
Route::get('/register', [AuthController::class, 'get_register'])->name('register');


Route::post('/login', [AuthController::class, 'post_login']);
Route::post('/register', [AuthController::class, 'post_register']);

Route::get('/email/need-verification', [VerificationController::class], 'notice')->middleware('auth')->name('verification.notice');
