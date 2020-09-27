<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Level;
use Illuminate\Support\Facades\Hash;


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

    public function editUser($id)
    {
        $level = Level::pluck('nama_level', 'id');

        $user = User::find($id);

        return view('user.editUser', ['user' => $user, 'level' => $level]);
    }

    public function update(Request $request, $id)
    {
        $errors = new \Illuminate\Support\MessageBag();
        $errors->add('Error', 'Konfirmasi password tidak sama');

        $user = User::find($id);
        $level = Level::pluck('nama_level', 'id');
        if ($request->password != $request->syncpassword) {
            return redirect()->back()->withErrors($errors);;
            return view('user.editUser', ['user' => $user, 'level' => $level])->with('error', 'Password tidak sama');
        } else if ($request->password == '') {
            $user->update($request->except('password'));
        } else {
            $pass =  Hash::make($request->password);
            $user->update($request->except('password'));
            $user->password = $pass;
            $user->save();
        }
        return redirect('/users')->with('sukses', 'Data Berhasil Di Update!');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'unique:users,email',
            'password' => ['required', 'string', 'min:8'],
            'id_level' => 'required'
        ]);
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        // return $request;
        User::create($data);
        return redirect('/users')->with('sukses', 'Data Berhasil Di Input!');
    }
}
