<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Level;

class UserController extends Controller
{
    //

    public function user()
    {
        $users = User::all();
        return view('user.user', ['users' => $users]);
    }

    public function adduser()
    {
        $users = User::all();
        $level = Level::pluck('nama_level', 'id');

        return view('user.addUser', ['users' => $users, 'level' => $level]);
    }
}
