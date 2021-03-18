<?php

namespace App\Http\Controllers\Main;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function listUsers()
    // {
    //     $user = User::where('id', '=', 1)->first();
    //     return view('listUsers', [
    //         'user' => $user,
    //     ]);
    // }

    public function index()
    {
        $users = User::all();
        return view('listAllUsers', [
            'users' => $users,
        ]);
    }

    public function listAllUsers()
    {
        $users = User::all();
        return view('listAllUsers', [
            'users' => $users,
        ]);
    }

    public function listUser(User $user)
    {
        return view('listUsers', [
            'user' => $user,
        ]);
    }

    public function show($user){
        $user = User::where('id', '=', $user)->first();
        return view('listUsers', [
            'user' => $user
        ]);
    }
}
