<?php
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\ForgetPassword;

use Illuminate\Support\Facades\Route;

// Route::middleware([App\Http\Middleware\UserAuth::class])->group(function () {
    Route::get('/', Home::class)->name("home");
// });


// Route::middleware([App\Http\Middleware\Guest::class])->group(function () {
    Route::get('/login', Login::class)->name("login");
    Route::get('/register', Register::class)->name("register");
    Route::get('/forget-password', ForgetPassword::class)->name("forget-password");
// });