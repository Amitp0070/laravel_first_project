<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;

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
    return view('layout.base');
});

Route::view('/user-form','user-form');
Route::post('/userform',[FormController::class, 'userForm']);

Route::get('/home', [UserController::class, 'home']);
Route::get('/user-test', [UserController::class, 'userHome']);
Route::get('/user-welcome', [UserController::class, 'userWelcome']);
Route::get('/user-about', [UserController::class, 'userAbout']);
// Route::get('/user-home', function () {
//     return view('home');
// });