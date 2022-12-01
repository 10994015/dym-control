<?php

namespace App\Http\Livewire;

use App\Models\GameStatu;
use Livewire\Component;

class GameStatus extends Component
{
    public $airstatuSelectType;
    public function changeStatuType($num){
        $gameStatu = GameStatu::where('gamenumber', $num)->first();
        $gameStatu->statu = $this->airstatuSelectType;
        $gameStatu->save();
    }
    public function render()
    {
        $gameStatusAir = GameStatu::where('gamenumber', 23)->first();
        $this->airstatuSelectType = $gameStatusAir->statu;
        return view('livewire.game-status')->layout('livewire.layouts.base');
    }
}
