<?php

namespace App\Livewire;

use Livewire\Component;

#[Layout('layouts.app')] 
class Home extends Component
{
    public function render()
    {
        return view('livewire.home');
    }
}
