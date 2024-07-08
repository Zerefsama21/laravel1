<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use PDF;

class UserController extends Controller
{
    public function index() {
        return ('Hello from UserController');
    }

    public function login(){
        if(View()->exists('user.login')){ 
            return view ('user.login');
        }else{
            //return response()->view('errors.404');
            return abort(404);
        }
    }

    public function process (Request $request){
        $validated = $request->validate([ 
            "email" => ['required', 'email',],
            'password' => 'required'
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Welcome Back');
        }

        return back()->withErrors(['email' => 'Login failed'])->onlyInput('email');
    }

    public function register(){
        return view('user.register');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Logout successfully');
    }

    public function store(Request $request){
        $validated = $request->validate([ 
            "name" => ['required', 'min:4'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        //if(auth()-> attempt($validated)){
        //$request->session()->regenerate();
        //}

         $validated['password'] = bcrypt($validated['password']);

         $user = User::create($validated);

         auth()->login($user); 

        //    dd($user);
        //    return $user;

        return redirect('/login');
    }

        public function show($id){
             $data = ["data" => "data from database"];
             return view ('user')
                ->with('data', $data)
                ->with ('name', 'wew')
                ->with('age', '12')
                ->with('email', 'a@gmail.com')
                ->with('id', $id);
            }
    
}
