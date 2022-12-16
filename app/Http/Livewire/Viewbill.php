<?php

namespace App\Http\Livewire;

use App\Models\BetList;
use Livewire\Component;

class Viewbill extends Component
{
    public $startTime;
    public $endTime;
    public $total_bet_amount; //總注單量
    public $bet_total_chip_size; //下注總碼量
    public $bet_total_win; //下注總輸贏
    public $bet_total_rake; //下注總抽水
    public function mount(){
        $this->startTime = date('Y-m-d');
        $this->endTime = date('Y-m-d', strtotime("+1 day"));
    }
    public function render()
    {
        $this->total_bet_amount = BetList::whereBetween('created_at', [$this->startTime, $this->endTime])->count();
        $this->bet_total_chip_size = BetList::whereBetween('created_at', [$this->startTime, $this->endTime])->sum('chips');
        $this->bet_total_win = BetList::whereBetween('created_at', [$this->startTime, $this->endTime])->sum('result') -  BetList::whereBetween('created_at', [$this->startTime, $this->endTime])->sum('money');
        $this->bet_total_rake = 0;

        return view('livewire.viewbill')->layout('livewire/layouts/base');
    }
}
