<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
    //
    public function index()
    {
        $berita = Berita::all();
        return view('berita.berita', ['berita' => $berita]);
    }
}
