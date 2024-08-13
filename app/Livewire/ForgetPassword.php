<?php

namespace App\Livewire;

use Livewire\Attributes\Validate; 
use Livewire\Component;

class ForgetPassword extends Component
{
    #[Validate('required')] 
    public $email = '';

    public function save()
    {
        $this->validate(); 
 
        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.forget-password')->layout('layouts.authLayout');
    }
}
