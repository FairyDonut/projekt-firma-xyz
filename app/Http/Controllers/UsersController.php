<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view(
            'users',
            [
                'users' => $users
            ]
        );
    }

    public function create()
    {
        return view('usersCreate');
    }

    public function createStore(Request $request)
    {
        $request->validate([
            'login' => 'required|min:3',
            'password' => 'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
            'firstName' => 'required',
            'lastName' => 'required',
            'role' => 'required'
        ]);

        $row = new User();
        $row->login = $request->login;
        $row->password = $request->password;
        $row->firstName = $request->firstName;
        $row->lastName = $request->lastName;
        $row->role = $request->role;
        $row->save();

        return redirect('users');
    }

    public function details($id)
    {
        $dane = User::find($id);
        return view(
            'usersDetails',
            [
                'showdata' => $dane
            ]
        );
    }

    public function detailsStore(Request $request, $id)
    {
        $request->validate([
            'login' => 'required|min:3',
            'firstName' => 'required',
            'lastName' => 'required',
            'role' => 'required'
        ]);

        $row = User::find($id);
        $row->login = $request->login;
        $row->firstName = $request->firstName;
        $row->lastName = $request->lastName;
        $row->role = $request->role;
        $row->save();

        return redirect('users');
    }

    public function deleteStore($id)
    {
        User::find($id)->delete();

        return redirect('users');
    }
}
