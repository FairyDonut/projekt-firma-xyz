<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return "test2";
    }

    public function show($id){
        return $id;
    }
}
