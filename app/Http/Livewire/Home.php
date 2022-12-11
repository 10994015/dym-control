<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Answer as ModelsAnswer;
use App\Models\LoginFail;
use App\Models\LoginRecord;

class Home extends Component
{
    protected $listeners = ['watchFail' => 'watchFail'];
    
    public function mount(){
        $nowDate = date('Y-m-d H:i');
        $answer = ModelsAnswer::where('bet_time', $nowDate)->count();
        if($answer < 1){
            $this->store();
        }
    }
    public function watchFail(){
        $failed = LoginFail::find(1);
        if($failed->failed >= 3){
            $this->dispatchBrowserEvent('showWarning');
        }else{
            $this->dispatchBrowserEvent('closeWarning');
        }
    }
    public function store(){
        $date = date('d');
        $year = date('Y');
        $month = date('m');
        $nowTime = date("H");
        $twoHour = date("H", strtotime("+2 hour"));

        $date_number = $year."-".$month."-".$date."-".$nowTime."-".$twoHour;
        // Log::info($date_number);
        $minute = 0;
        $hour = intval(date('H'));
        for($i=1;$i<=120;$i++){
            $rankingArr = [1,2,3,4,5,6,7,8,9,10];
            shuffle($rankingArr);
            $ranking = implode(",",$rankingArr);
            $minute ++;
            if($minute >= 60){
                $hour++;
                $minute = 0;
            }
            if($hour >= 24){
                $hour = 0;
            }
            if($minute < 10){
                $minuteStr = "0".$minute;
            }else{
                $minuteStr = $minute;
            }
            if($hour < 10){
                $hourStr = "0".$hour;
            }else{
                $hourStr = $hour;
            }
            
            $number = "SR9359".$year.$month.$date.$hourStr.$minuteStr;
            // Log::info($number);
            $bet_time = $year."-".$month."-".$date." ".$hourStr.":".$minuteStr;
            // Log::info($bet_time);
            $answer = new ModelsAnswer();
            $answer->number = $number;
            $answer->ranking = $ranking;
            $answer->date_number = $date_number;
            $answer->bet_time = $bet_time;
            $answer->save();
        }
    }
    public function render()
    {
        $login_record = LoginRecord::orderBy('created_at', 'DESC')->first();
        return view('livewire.home', ['login_record'=>$login_record])->layout('livewire/layouts/base');
    }
}
