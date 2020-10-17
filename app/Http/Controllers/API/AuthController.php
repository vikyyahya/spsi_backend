<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Validator;


class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
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
        $request['password'] = bcrypt($request->password);

        // $user = User::create($validatedData);
        $date = date_create("2013-03-15 00:00:00");
        $date = date_format($date, "YYYY-MM-DD HH:mm:ss");
        $date = $request['tanggal_lahir'] . " 00:00:00";
        $user = User::create([
            'name' => $request['name'],
            'nik' => $request['nik'],
            'email' => $request['email'],
            'password' => $request['password'],
            'id_level' => 2,
            'plant' => $request['plant'],
            'bagian' => $request['bagian'],
            'tempat_lahir' => $request['tempat_lahir'],
            'tanggal_lahir' => $date,
            'jenis_kelamin' => $request['jenis_kelamin'],
            'agama' => $request['agama'],
            'alamat' => $request['alamat'],
        ]);

        $accessToken = $user->createToken('authToken')->accessToken;

        return response(['user' => $user, 'access_token' => $accessToken, 'success' => true, 'code' => 200]);
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($loginData)) {
            return response(['message' => 'Invalid Credentials']);
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        $user = auth()->user();
        $user->api_token = $accessToken;
        $user->save();
        return response(['user' => auth()->user(), 'success' => true, 'code' => 200, 'access_token' => $accessToken]);
    }
}
