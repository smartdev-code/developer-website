<?php

namespace App\Livewire;

use Livewire\Attributes\Validate; 
use Livewire\Component;

class Login extends Component
{
    #[Validate('required')] 
    public $email = '';

    #[Validate('required')]
    public $password = '';

    public function save()
    {
        $this->validate(); 
 
        return $this->redirect('/');
    }
    
    public function render()
    {
        return view('livewire.login')->layout('layouts.authLayout');
    }
}
