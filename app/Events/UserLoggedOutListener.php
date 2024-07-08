<?php

// UserLoggedOutListener
namespace App\Listeners;

use App\Events\UserLoggedOut;
use Illuminate\Contracts\Queue\ShouldQueue;
use Spatie\Activitylog\Models\Activity;

class UserLoggedOutListener implements ShouldQueue
{
    public function handle(UserLoggedOut $event)
    {
        activity()
            ->causedBy($event->user)
            ->log('Logged out');
    }
}

