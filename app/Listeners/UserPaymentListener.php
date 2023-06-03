<?php

namespace App\Listeners;

use App\Events\UserSubriscription;
use App\Mail\UserPaymentMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class UserPaymentListener
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
    public function handle(UserSubriscription $event): void
    {
        Mail::to($event->email)->send(new UserPaymentMail());
    }
}
