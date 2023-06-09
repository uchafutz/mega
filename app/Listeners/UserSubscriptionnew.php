<?php

namespace App\Listeners;

use App\Events\UserSubriscription;
use App\Mail\AdminUpdateMail;
use App\Mail\UserSubscriptionMail;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class UserSubscriptionnew
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

        $admi_mail = User::where(['status' => '1'])->first();
        // dd($admi_mail->email);
        // dd($event->email, $event->body);
        Mail::to($event->email)->send(new UserSubscriptionMail($event->body));
        Mail::to($admi_mail->email)->send(new AdminUpdateMail());
    }
}
