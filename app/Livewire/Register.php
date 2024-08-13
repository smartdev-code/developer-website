<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    #[Validate('required')] 
    public $name = '';

    #[Validate('required')] 
    public $email = '';

    #[Validate('required')]
    public $password = '';

    public function save()
    {
        $this->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8', // Assuming you have a 'password_confirmation' field
            ]
        ); 

        User::create([
           "name" => $this->name,
           "email" => $this->email,
           "password" => Hash::make($this->password) 
        ]);
 
        return $this->redirect('/login');
    }

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

    public function render()
    {
        return view('livewire.register')->layout('layouts.authLayout');
    }
}
