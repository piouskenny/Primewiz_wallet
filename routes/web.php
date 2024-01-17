<?php

use App\Livewire\User\Login;
use App\Livewire\User\Signup;
use Illuminate\Support\Facades\Route;

/**
 * User Auth route
 */
Route::get('/signup', Signup::class)->name('user.signup');
Route::get('/login', Login::class)->name('user.login');
