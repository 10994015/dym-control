<?php

namespace App\Http\Livewire;

use App\Models\BetList;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class StatisticalData extends Component
{
    public $startTime;
    public $endTime;
    public $betList = [];
    public $total_bet;
    public function mount(){
        $this->startTime = date('Y-m-d');
        $this->endTime = date('Y-m-d', strtotime("+1 day"));
    }
    
    public function searchTime(){
        $this->betList = BetList::whereBetween('created_at', [$this->startTime,   $this->endTime])->get();
        $this->total_bet = BetList::whereBetween('created_at', [$this->startTime,   $this->endTime])->count();
    }
    public function render()
    {
        $this->betList = BetList::whereBetween('created_at', [$this->startTime,   $this->endTime])->get();
        $this->total_bet = BetList::whereBetween('created_at', [$this->startTime,   $this->endTime])->count();
        return view('livewire.statistical-data')->layout('livewire.layouts.base');
    }
}
