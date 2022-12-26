<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


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
    return view('/content-compro/home',[
        "title" => "Home"
    ]);
});

Route::get('/company', function () {
    return view('/content-compro/company',[
        "title" => "Company"
    ]);
});

Route::get('/loginpage', function () {
    return view('/member/loginpage',[
        "title" => "Login Page"
    ]);
});

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/dashboard', function () {
    return view('/member/dashboard',[
        "title" => "Dashboard"
    ]);
});

Route::get('/manageuser', function () {
    return view('/member/manageuser',[
        "title" => "Manage User"
    ]);
});