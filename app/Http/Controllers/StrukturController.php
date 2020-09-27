<?php

namespace App\Http\Controllers;

use App\Struktur;

use Illuminate\Http\Request;

class StrukturController extends Controller
{
    //
    public function index()
    {
        $struktur = Struktur::paginate(5);
        return view('struktur.struktur', ['struktur' => $struktur]);
    }
}
