<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Students extends Model
{

    // protected $guarded = [];

    // protected $fillable = [
    //     'first_name',
    //     'last_name',
    //     'gender',
    //     'age',
    //     'email',
    // ];

    // use HasFactory;
        //Add user method in existing post model
    //     public function student(){
    //         return $this->belongsTo('Students::class');
    //     // }
    // }

    // use HasFactory;

    // protected $fillable = [
    //     'name', 'username', 'email', 'password', 'photo', 'phone', 'address', 'role', 'status',
    // ];

    // protected static function booted()
    // {
    //     static::creating(function ($user) {
    //         $user->custom_id = 'W-' . str_pad(static::count() + 1, 4, '0', STR_PAD_LEFT);
    //     });
    // }

    use LogsActivity;

    protected $fillable = ['first_name', 'last_name', 'gender', 'age', 'email'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['first_name', 'last_name', 'gender', 'age', 'email'])
        // Chain fluent methods for configuration options
        ->setDescriptionForEvent(fn(string $eventName) => " {$eventName} an user");
    }
    
}

// $data = Students::with('student')->first();
// dd($data);


