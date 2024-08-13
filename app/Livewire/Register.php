<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
    public function render()
    {
        return view('livewire.register')->layout('layouts.authLayout');
    }
}
