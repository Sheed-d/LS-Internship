<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AuthController extends Controller
{
    public function register(Request $request) {
        
        //validate
        $fields = $request->validate([
            'username' =>['required', 'max:255'],
            'email' =>['required', 'max:255', 'email', 'unique:users'],
            'password' =>['required', 'min:8', 'confirmed']
        ]);

        //Register
        $user = User::create($fields);

        //Login
        FacadesAuth::login($user);

        //Redirect
        return redirect()->route('home');

    }

    public function login(Request $request){
        
        //validate
        $fields = $request->validate([
            'email' =>['required', 'max:255', 'email'],
            'password' =>['required']
        ]);

        if (FacadesAuth::attempt($fields, $request->remember)) {
            return redirect()->intended();
        } else {
            return back()->withErrors([
                'failed' => 'The provided credentials do not match our records.'
            ]);
        }
        
    }
}
