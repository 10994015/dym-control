<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class UserStatus extends Component
{
    public $searchText;
    public $users = [];
    
    public function changeStatuType($id){
        User::query()->update(  ['status' => 0] );

    }
    public function closeAll(){
        User::query()->update(  ['status' => 0] );
    }
    public function openAll(){
        User::query()->update(  ['status' => 1] );
    }
    public function render()
    {
        $this->users = User::where([['utype', 'USR'],['username', 'like', "%$this->searchText%"]])->orwhere([['utype', 'USR'],['phone', 'like', "%$this->searchText%"]])->get();
        return view('livewire.user-status')->layout('livewire.layouts.base');
    }
}
