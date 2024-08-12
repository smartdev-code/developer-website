<?php
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Register;

use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name("home");
Route::get('/login', Login::class)->name("login");
Route::get('/register', Register::class)->name("register");