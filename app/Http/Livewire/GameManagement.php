<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GameManagement extends Component
{
    public function render()
    {
        return view('livewire.game-management')->layout('livewire/layouts/base');
    }
}
