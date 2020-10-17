<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;


class ProfileController extends Controller
{
    //
    public function profile(Request $request)
    {
        // $user = User::find($request->id);
        $user = Auth::user();

        return response(['user' => $user, 'success' => true, 'code' => 200]);
    }

    public function pengunduran(Request $request)
    {
        // $user = User::find($request->id);
        $user = Auth::user();

        return response(['user' => $user, 'success' => true, 'code' => 200]);
    }

    public function updateprofile(Request $request)
    {
        // $user = User::find($request->id);
        $user = Auth::user();
        $validatedData =  Validator::make($request->all(), [
            'name' => 'required|max:55',
            'nik' => 'required',
            'plant' => 'required',
            'bagian' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required',
        ]);
        if ($validatedData->fails()) {
            return response()->json(['error' => $validatedData->errors()], 401);
        }
        $user->name = $request['name'];
        $user->nik = $request['nik'];
        $user->plant = $request['plant'];
        $user->bagian = $request['bagian'];
        $user->tempat_lahir = $request['tempat_lahir'];
        $user->tanggal_lahir = $request['tanggal_lahir'];
        $user->jenis_kelamin = $request['jenis_kelamin'];
        $user->agama = $request['agama'];
        $user->alamat = $request['alamat'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();

        return response(['user' => $user, 'success' => true, 'code' => 200]);
    }
}
