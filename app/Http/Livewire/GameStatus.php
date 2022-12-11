<?php

namespace App\Http\Livewire;

use App\Models\GameStatu;
use App\Models\LoginFail;
use App\Models\User;
use Livewire\Component;

class GameStatus extends Component
{
    public $airstatuSelectType;
    public $users;
    public $selectUser;
    public $selectUsersArr = [];
    protected $listeners = ['watchFail' => 'watchFail'];

    public function mount(){
        $this->selectUsersArr = User::where('utype', 'USR')->get();
    }
    public function watchFail(){
        $failed = LoginFail::find(1);
        if($failed->failed >= 3){
            $this->dispatchBrowserEvent('showWarning');
        }else{
            $this->dispatchBrowserEvent('closeWarning');
        }
    }
    public function changeStatuType($num){
        $gameStatu = GameStatu::where('gamenumber', $num)->first();
        $gameStatu->statu = $this->airstatuSelectType;
        $gameStatu->save();
    }
    public function searchUsers(){
        $this->selectUsersArr = User::where('utype', 'USR')->where('username', 'like', '%'. $this->users . '%')->get();
    }
    public function render()
    {
        $failed = LoginFail::find(1);
        if($failed->failed >= 3){
            $this->dispatchBrowserEvent('showWarning');
        }else{
            $this->dispatchBrowserEvent('closeWarning');
        }
        $gameStatusAir = GameStatu::where('gamenumber', 23)->first();
        $this->airstatuSelectType = $gameStatusAir->statu;
        return view('livewire.game-status')->layout('livewire.layouts.base');
    }
}
