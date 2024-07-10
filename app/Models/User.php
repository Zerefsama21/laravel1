<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class User extends Authenticatable
{
    use HasFactory, Notifiable, LogsActivity;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name', 'email']) // Attributes to be logged
            ->setDescriptionForEvent(fn(string $eventName) => "{$eventName} a user"); // Description for logged events
    }

    public function logLogin()
    {
        activity()
            ->performedOn($this)
            ->log('Logged in');
    }

    public function logLogout()
    {
        activity()
            ->performedOn($this)
            ->log('Logged out');
    }
}
