<?php

namespace App\Http\Livewire;

use App\Models\LoginFail;
use Livewire\Component;

class MemberWalletVerify extends Component
{
    protected $listeners = ['watchFail' => 'watchFail'];

    public function watchFail(){
        $failed = LoginFail::find(1);
        if($failed->failed >= 3){
            $this->dispatchBrowserEvent('showWarning');
        }else{
            $this->dispatchBrowserEvent('closeWarning');
        }
    }
    public function render()
    {
        return view('livewire.member-wallet-verify')->layout('livewire.layouts.base');
    }
}
