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

    Route::get('/register', [AuthController::class, 'register'])->name('register.index');
    Route::post('/register/create', [AuthController::class, 'createUser'])->name('register.create');
    Route::post('/login/create', [AuthController::class, 'loginUser'])->name('login.create');
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('dashboard/user-list', [AuthController::class, 'getUser'])->name('user.index');

 Route::get('/login', [AuthController::class, 'login'])->name('login.index');
 Route::get('/logout', [AuthController::class, 'logout'])->name('logout'); 

