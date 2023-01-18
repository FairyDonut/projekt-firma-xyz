<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function show($id){
        return $id;
    }
    public function index(){
        $user_list = User::all();
        error_log($user_list);
        return view('users',
         [
             'listuser' => $user_list
         ]);

     }

}
