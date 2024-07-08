<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\UserLoggedIn;

class LoginController extends Controller
{
    
}

event(new UserLoggedIn(auth()->user()));
