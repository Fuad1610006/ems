<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController as auth;
use App\Http\Controllers\UserController as user;
use App\Http\Controllers\DashboardController as dashboard;
use App\Http\Controllers\DepartmentController as department;
use App\Http\Controllers\DesignationController as designation;
use App\Http\Controllers\PermissionController as permission;
use App\Http\Controllers\RoleController as role;
use App\Http\Controllers\EmployeeController as employee;
use App\Http\Controllers\AttendanceController as attendance;
use App\Http\Controllers\LeaveController as leave;

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

// Route::resource('employee', employee::class);
// Route::get('dashboard', [dashboard::class,'index'])->name('dashboard');
// Route::get('/register', [auth::class,'signUpForm'])->name('register');
// Route::post('/register', [auth::class,'signUpStore'])->name('register.store');
Route::get('/login', [auth::class,'signInForm'])->name('login');
Route::post('/login', [auth::class,'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class,'singOut'])->name('logOut');

Route::middleware(['checkauth'])->prefix('admin')->group(function(){
    Route::get('dashboard', [dashboard::class,'index'])->name('dashboard');
    Route::get('profile', [employee::class,'displayProfile'])->name('profile');
    Route::resource('department', department::class);
    Route::resource('designation', designation::class);
    Route::resource('employee', employee::class);
    Route::resource('attendance', attendance::class);
    Route::resource('leave', leave::class);
});

Route::middleware(['checkrole'])->prefix('admin')->group(function(){
    // Route::get('dashboard', [dashboard::class,'index'])->name('dashboard');
    Route::resource('user', user::class);
    Route::resource('role', role::class);
    Route::get('permission/{role}', [permission::class,'index'])->name('permission.list');
    Route::post('permission/{role}', [permission::class,'save'])->name('permission.save');
});

Route::get('/', function () {
    return view('dashboard');
});




// Route::get('/dashboard', function () {
//     return view('welcome');
// })->name('dashboard');
// Route::get('/', function () {
//     return view('frontend.home');
// });
