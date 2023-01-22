<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users',
         [
             'users' => $users
         ]);
     }
}
