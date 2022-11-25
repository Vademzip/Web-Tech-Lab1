<?php

use App\Http\Controllers\Auth\AuthorizedController;
use App\Http\Controllers\Auth\UnauthorizedController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPageController;


Route::get('/login.do',[UnauthorizedController::class, 'login_do'])->name('auth.login.do');

Route::middleware('guest')->group(function (){
    Route::view('/register','auth.register')->name('auth.register');
    Route::post('/register.do', [UnauthorizedController::class, 'register_do'])->name('auth.register.do');
});

Route::middleware('auth')->group(function (){
    Route::view('/profile','auth.profile')->name('auth.profile');
    Route::post('/profile.update', [AuthorizedController::class, 'profile_update'])->name('auth.profile.update');
    Route::get('/profile.logout', [AuthorizedController::class, 'logout'])->name('auth.logout');
});






//login.do
//
//register.do
//register
//
//profile
//profile.update
