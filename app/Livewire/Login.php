<?php

namespace App\Livewire;

use Livewire\Attributes\Validate; 
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Facades\Socialite;

class Login extends Component
{
    #[Validate('required')] 
    public $email = '';

    #[Validate('required')]
    public $password = '';

    public function redirectToGoogle()
    {
        return redirect()->to(Socialite::driver('google')->stateless()->redirect()->getTargetUrl());
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();

        $authUser = \App\Models\User::where('email', $user->getEmail())->first();

        if ($authUser) {
            Auth::login($authUser);
        } else {
            $newUser = \App\Models\User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => bcrypt('password'), // Handle password securely
            ]);
            Auth::login($newUser);
        }

        return redirect()->intended('/');
    }

    public function login()
    {
        $this->validate(); 

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->intended('/');
        }
 
        session()->flash('error', 'The email or password is incorrect.');
    }
    
    public function render()
    {
        return view('livewire.login')->layout('layouts.authLayout');
    }
}
