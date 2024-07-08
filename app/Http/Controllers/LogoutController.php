<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\UserLoggedOut;

class LogoutController extends Controller
{
    
}

event(new UserLoggedOut(auth()->user()));