<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Berita;
use Illuminate\Support\Facades\Auth;
use Validator;


class BeritaController extends Controller
{
    //
    public function berita(Request $request)
    {
        $berita = Berita::all();
        return response(['berita' => $berita, 'success' => true, 'code' => 200]);
    }
}
