<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use App\Models\Game;
use App\Models\GameInfos;
use App\Models\Gametype;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class GameManagement extends Component
{
    public $gameTypes = [];
    public $games = [];
    public $selectGameType;
    public $selectGame;
    public $drawResults = [];
    public $info = [];
    //飛機:23
    public $gameNumber = -1;
    public function mount(){
        $this->gameTypes = Gametype::all();
    }
    public function changeGameType(){
        if($this->selectGameType != "-1" ){
            $this->games = Game::where('gametype_id' , $this->selectGameType)->get();
        }
        
    }
    public function changeGame(){
        if($this->selectGame != "-1"){
            $this->dispatchBrowserEvent('openSearch', ['password'=>'1']);
        }else{
            $this->dispatchBrowserEvent('openSearch', ['password'=>'-1']);
        }
    }
    public function searchFn(){
        $this->gameNumber = -1;
        if($this->selectGameType == 2 && $this->selectGame == 3){
            $this->gameNumber = 23;
        }
        $this->info = GameInfos::where('gamenumber', $this->gameNumber)->first();
        Log::info($this->info);
        $this->dispatchBrowserEvent('searched', ['game'=>'23']);
    }
    public function viewDraw(){
        if($this->gameNumber == 23){
            $this->drawResults = Answer::where('bet_time', 'LIKE', date('Y-m-d H').'%')->get();
        }
    }
    public function openChangeResult(){
        $this->dispatchBrowserEvent('openChangeResultModal');
    }
    public function render()
    {
        
        return view('livewire.game-management')->layout('livewire/layouts/base');
    }
}
