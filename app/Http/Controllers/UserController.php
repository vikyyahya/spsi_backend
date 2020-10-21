<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Level;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade as PDF;


class UserController extends Controller
{
    //

    public function user()
    {
        $users = User::paginate(5);
        return view('user.user', ['users' => $users]);
    }

    public function pengunduran()
    {
        $users = User::where('pengunduran', '1')->paginate(5);
        return view('user.userpengunduran', ['users' => $users]);
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
        $collection = collect([
            ['id' => '1', 'name' => 'belum diproses'],
            ['id' => '2', 'name' => 'aktif'],
            ['id' => '3', 'name' => 'tidak aktif'],
        ]);

        $plucked = $collection->pluck('name', 'name');

        return view('user.editUser', ['status' => $plucked, 'user' => $user, 'level' => $level]);
    }

    public function update(Request $request, $id)
    {
        $errors = new \Illuminate\Support\MessageBag();
        $errors->add('Error', 'Konfirmasi password tidak sama');

        $user = User::find($id);
        $level = Level::pluck('nama_level', 'id');

        if ($request->password == '') {
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
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete($user);
        return redirect('/users')->with('sukses', 'Data berhasil dihapus!');
    }

    public function pengunduranAproved($id)
    {
        $user = User::find($id);
        $user->delete($user);
        return redirect('users/pengunduran')->with('sukses', 'Data berhasil dihapus!');
    }
    public function print($id)
    {
        $users = User::find($id);
        $pdf = PDF::loadview('report.reportuser', ['user' => $users]);
        $pdf->save(storage_path() . '/uniquename.pdf');
        return $pdf->stream();

        // return $users;
        // return (new UserReport($users))->download('users.xlsx');
    }
}
