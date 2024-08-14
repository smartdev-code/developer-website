<?php
use App\Livewire\Home;
use App\Livewire\Project;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\ForgetPassword;

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::middleware([App\Http\Middleware\UserAuth::class])->group(function () {
    Route::get('/', Home::class)->name("home");
    Route::get('/projects', Project::class)->name("project");
});

Route::get('auth/google', [Login::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [Login::class, 'handleGoogleCallback']);

Route::middleware([App\Http\Middleware\Guest::class])->group(function () {
    Route::get('/login', Login::class)->name("login");
    Route::get('/register', Register::class)->name("register");
    Route::get('/forget-password', ForgetPassword::class)->name("forget-password");
});