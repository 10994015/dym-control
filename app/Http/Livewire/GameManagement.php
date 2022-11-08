<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use App\Models\Game;
use App\Models\GameInfos;
use App\Models\Gametype;
use App\Models\RiskBet;
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
    public $changeResultArr = [];
    public $changeResultNumber;
    public $oriResultArr;
    public $betRecord = [];
    public $max;
    public $totalBet;

    protected $listeners = ['changeSubmit'=>'changeSubmit'];

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
        // Log::info($this->info);
        $this->dispatchBrowserEvent('searched', ['game'=>'23']);
    }
    public function viewDraw(){
        if($this->gameNumber == 23){
            $this->drawResults = Answer::where('bet_time', 'LIKE', date('Y-m-d H').'%')->get();
        }
    }
    public function openChangeResult($id){
        $answer = Answer::where('id', $id)->first();
        
        $this->changeResultArr = explode(',', $answer->ranking);
        $this->oriResultArr = str_replace(',', ' - ', $answer->ranking);
        // Log::info($this->oriResultArr);
        $this->changeResultNumber = $answer->number;
        $risk_bet = RiskBet::where('bet_number', $this->changeResultNumber)->get();
        $this->betRecord = $risk_bet;
        // Log::info( $this->betRecord);
        // Log::info($risk_bet);
        if(count($this->betRecord) > 0){
            Log::info("+++");
            $this->max = $risk_bet[0]->result;
            $this->totalBet = $risk_bet[0]->money;
        }else{
            Log::info("---");
            $this->max = 0;
            $this->totalBet = 0;
        }
        
        // Log::info($this->changeResultNumber);
        $this->dispatchBrowserEvent('openChangeResultModal', ['bet_time'=>$answer->bet_time]);
    }
    public function changeSubmit($arr){
        $this->changeResultArr = $arr;
        $answer = Answer::where('number', $this->changeResultNumber)->first();
        Log::info(implode(",", $this->changeResultArr));
        $answer->ranking = implode(",", $this->changeResultArr);
        $answer->save();
    }
    public function render()
    {
        
        return view('livewire.game-management')->layout('livewire/layouts/base');
    }
}
