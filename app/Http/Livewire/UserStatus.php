<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserStatus extends Component
{
    public function render()
    {
        return view('livewire.user-status')->layout('livewire.layouts.base');
    }
}