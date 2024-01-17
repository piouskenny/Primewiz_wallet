<?php

use App\Livewire\User\Login;
use App\Livewire\User\Signup;
use App\Livewire\User\Dasboard;
use Illuminate\Support\Facades\Route;

/**
 * User Auth Route
 */
Route::get('/signup', Signup::class)->name('user.signup');
Route::get('/login', Login::class)->name('user.login');



/**
 * User Dashboard Route
 */
Route::prefix('user')->middleware('user.auth')->group(
    function () 
    {
        Route::get('/dashboard', Dasboard::class)->name('user.dashboard');
    }
);