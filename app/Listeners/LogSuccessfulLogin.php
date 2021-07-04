<?php

namespace App\Listeners;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Login;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @param  Request  $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        // $time = Carbon::parse(date('Y-m-d H:i:s'));
        $time = date('Y-m-d H:i:s');
        $endTime = $time->addMinutes(420);
        $user = $event->user;
        $user->last_login_at = $endTime;
        $user->last_login_ip = $this->request->ip();
        $user->save();
    }
}