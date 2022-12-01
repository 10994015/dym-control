<?php

namespace App\Console\Commands;
use App\Models\Answer as ModelsAnswer;
use Illuminate\Console\Command;

class addAnswer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    public $date; 
    public $year; 
    public $month; 
    public $hour; 
    public $nowTime; 
    public $twoHour; 
    protected $signature = 'add:answer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function store(){
       
    }
     public function handle()
    {
        $this->info('serve started');
       
        while(true){
            if(intval(date('i')) == 0 && (intval(date('h'))%2) == 0){
                $this->info(date('Y/m/d H:i:s'));
                $this->date = date('d');
                $this->year = date('Y');
                $this->month = date('m');
                $this->nowTime = date("H");
                $this->twoHour = date("H", strtotime("+2 hour"));
                
                $this->info('serve started');
                $date_number = $this->year."-".$this->month."-".$this->date."-".$this->nowTime."-".$this->twoHour;
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
                    
                    $number = "SR9359".$this->year.$this->month.$this->date.$hourStr.$minuteStr;
                    // Log::info($number);
                    $bet_time = $this->year."-".$this->month."-".$this->date." ".$hourStr.":".$minuteStr;
                    // Log::info($bet_time);
                    $answer = new ModelsAnswer();
                    $answer->number = $number;
                    $answer->ranking = $ranking;
                    $answer->date_number = $date_number;
                    $answer->bet_time = $bet_time;
                    $answer->save();
                }
            }
            sleep(30);
        }

        
        return 0;
    }
}
