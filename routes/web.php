<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController as auth;
use App\Http\Controllers\UserController as user;
use App\Http\Controllers\DashboardController as dashboard;
use App\Http\Controllers\DepartmentController as department;
use App\Http\Controllers\DesignationController as designation;
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

Route::get('/register', [auth::class,'signUpForm'])->name('register');
Route::post('/register', [auth::class,'signUpStore'])->name('register.store');
Route::get('/login', [auth::class,'signInForm'])->name('login');
Route::post('/login', [auth::class,'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class,'singOut'])->name('logOut');

Route::resource('departments', department::class);
Route::resource('designations', designation::class);

Route::middleware(['checkrole'])->group(function(){
    Route::get('/dashboard', [dashboard::class,'index'])->name('dashboard');  
    Route::resource('/user', user::class);
 });

Route::get('/', function () {
    return view('dashboard');
});

// Route::get('/dashboard', function () {
//     return view('welcome');
// })->name('dashboard');