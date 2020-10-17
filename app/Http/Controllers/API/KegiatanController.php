<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kegiatan;
use Illuminate\Support\Facades\Auth;
use Validator;


class KegiatanController extends Controller
{
    //
    public function kegiatan(Request $request)
    {
        // $user = User::find($request->id);
        $kegiatan = Kegiatan::all();

        return response(['berita' => $kegiatan, 'success' => true, 'code' => 200]);
    }
}
