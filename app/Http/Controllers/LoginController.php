<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login'); // Make sure you have login.blade.php here
    }

    public function store(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('home')->with('success', 'Welcome back to DinoBlog!');
        }

        return back()->withErrors([
            'email' => 'Invalid login — please check your credentials.',
        ]);
    }
}