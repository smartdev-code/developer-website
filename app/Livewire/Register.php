<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate; 

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
 
        return $this->redirect('/');
    }
    public function render()
    {
        return view('livewire.register')->layout('layouts.authLayout');
    }
}
