<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
class MemberWallet extends Component
{
    public $users = [];
    public $clientIp;
    public $ip;
    public $searchText;
    protected $listeners = ['updateMemberMoney' => 'updateMemberMoney'];
    public function mount(Request $req){
        log::info($req->getClientIp());
        $this->ip = $req->ip();
        $this->clientIp = $req->getClientIp();
        if($req->pwd !== 'aaa888'){
            return redirect('/member_wallet_verify');
        }
    }
    public function updateMemberMoney($id, $money){
        $user = User::find($id);
        $user->money = $money;
        $user->save();
    }
    public function render()
    {
        $this->users = User::where([['utype', 'USR'],['username', 'like', "%$this->searchText%"]])->orwhere([['utype', 'USR'],['phone', 'like', "%$this->searchText%"]])->get();
        return view('livewire.member-wallet', ['users'=>$this->users])->layout('livewire.layouts.base');
    }
}
