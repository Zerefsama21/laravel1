<?php

// UserLoggedInListener
namespace App\Listeners;

use App\Events\UserLoggedIn;
use Illuminate\Contracts\Queue\ShouldQueue;
use Spatie\Activitylog\Models\Activity;

class UserLoggedInListener implements ShouldQueue
{
    public function handle(UserLoggedIn $event)
    {
        activity()
            ->causedBy($event->user)
            ->log('Logged in');
    }
}

