<?php

namespace App\Livewire;

use Livewire\Attributes\Validate; 
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class Login extends Component
{
    #[Validate('required')] 
    public $email = '';

    #[Validate('required')]
    public $password = '';

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
