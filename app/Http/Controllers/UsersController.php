<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function listUsers(){
        // $user = new User();
        // $user->name = 'Hugo Porto';
        // $user->email = 'victor.porto7@gmail.com';
        // $user->password = Hash::make('123');
        // $user->save();

        $user = User::where('id', '=', 1)->first();
        return view('listUsers', [
            'user' => $user
        ]);
    }
}
