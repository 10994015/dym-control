<?php

namespace App\Listeners;

use App\Models\LoginFail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LoginFailedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $login_fail = LoginFail::find(1);
        $login_fail->login_time = now();
        $login_fail->login_ip = request()->getClientIp();
        $login_fail->failed = $login_fail->failed + 1;
        $login_fail->save();
    }
}
