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

    public function updateprofile(Request $request)
    {
        // $user = User::find($request->id);
        $user = Auth::user();

        return response(['user' => $user, 'success' => true, 'code' => 200]);
    }
}
