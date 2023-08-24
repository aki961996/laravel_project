<?php

namespace App\Listeners;

use App\Events\UserCreatedEvent;
use App\Mail\WelcomeEmail;
use Illuminate\Console\View\Components\Warn;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class UserEventListener
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
    public function handle(UserCreatedEvent $event): void
    {
        // info($event->user);
        Mail::to($event->user->email)
            ->cc('aaa.@gmail.com')
            ->bcc('xyz@gmail.com')->send(new WelcomeEmail($event->user, 'drfdrf'));

        // return ($user);
    }
}
