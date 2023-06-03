<?php

namespace App\Listeners;

use App\Events\UserOrderCreate;
use App\Mail\UserOrderMail;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class UserOrderListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserOrderCreate $event): void
    {
        $admi_mail = User::where(['status' => '1'])->first();
        Mail::to($event->email)->send(new UserOrderMail());
        Mail::to($admi_mail->email)->send(new UserOrderMail());
    }
}
