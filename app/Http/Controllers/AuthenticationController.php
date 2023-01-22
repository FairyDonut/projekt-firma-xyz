<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticationController extends Controller
{
    public function login(){
        return View('login');
    }

    public function loginStore(Request $request){
        $credentials = $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);

        // $user = User::where('login');

        Auth::login($credentials);

        return redirect('login');

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect("welcom");
        // }

        // return back()->withErrors([
        //     'login' => 'The provided credentials do not match our records.',
        // ])->onlyInput('login');
    }
}
