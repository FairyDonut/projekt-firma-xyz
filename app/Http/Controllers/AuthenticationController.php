<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login()
    {
        return View('login');
    }

    public function loginStore(Request $request)
    {
        $credentials = $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'login' => 'Login and password are not corrent.',
        ])->onlyInput('login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }
}
