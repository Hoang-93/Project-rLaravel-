<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

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

Route::get("/get-session",[SessionController::class,"getSession"]);
Route::get("/set-session",[SessionController::class,"setSession"]);
Route::get("/check-session",[SessionController::class,"checkExits"]);
Route::get("/set-flash-session",[SessionController::class,"setFlashSession"]);
Route::get("/get-flash-session",[SessionController::class,"getFlashSession"]);



