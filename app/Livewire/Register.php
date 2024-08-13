<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
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
        $this->validate(); 

        User::create([
           "name" => $this->name,
           "email" => $this->email,
           "password" => MD5($this->password) 
        ]);
 
        return $this->redirect('/');
    }
    public function render()
    {
        return view('livewire.register')->layout('layouts.authLayout');
    }
}
