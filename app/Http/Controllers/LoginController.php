<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\UserLoggedIn;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        // Validate login data and attempt to authenticate
        if (Auth::attempt($request->only('email', 'password'))) {
            // Authentication passed...
            $user = Auth::user();
            $user->logLogin(); // Log the login event
            return redirect()->intended('/dashboard');
        }

        // Authentication failed...
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}


