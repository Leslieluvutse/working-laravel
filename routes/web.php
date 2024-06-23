<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/home',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/home', function (){
    return view('home');
})->name('home');

    Route::get('/profile/create',[ProfileController::class, 'create'])->name('profile.create');
    Route::post('/profile', [ProfileController::class,'store'])->name('profile.store');
    Route::get('/profile/view', [ProfileController::class, 'view'])->name('profile.view');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/', [ProfileController::class,'destoy'])->name('profile.destroy');



Route::middleware(['auth'])->group(function () 
{
    Route::resource('users', UserController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

