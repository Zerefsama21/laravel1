<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\UserLoggedOut;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        $user = Auth::user();
        Auth::logout(); // Perform logout
        $user->logLogout(); // Log the logout event
        return redirect('/login');
    } 
}

