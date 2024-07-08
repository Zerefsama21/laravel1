<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Illuminate\Support\Facades\Auth;

class Weapons extends Model
{

    use LogsActivity;

    protected $fillable = ['weapon_name', 'weapon_type', 'rarity', 'quantity'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['weapon_name', 'weapon_type', 'rarity', 'quantity'])
        // Chain fluent methods for configuration options
        ->setDescriptionForEvent(fn(string $eventName) => " {$eventName}  an item");
    }

    

    //     use LogsActivity;
    
    //     protected $fillable = ['weapon_name', 'weapon_type', 'rarity', 'quantity'];
    
    //     public function getActivitylogOptions(): LogOptions
    //     {
    //         return LogOptions::defaults()
    //             ->logOnly(['weapon_name', 'weapon_type', 'rarity', 'quantity'])
    //             ->setDescriptionForEvent([$this, 'getDescriptionForEvent']);
    //     }
    
    //     public function getDescriptionForEvent(string $eventName): string
    //     {
    //         $causerName = optional(Auth::users())->name ?? 'System'; // Get the user's name or default to 'System'
    //         return "{$causerName} {$eventName} an item"; // Example: "John Doe created an item"
    // }
    


}





