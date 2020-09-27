<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;

class KegiatanController extends Controller
{
    //
    public function index()
    {
        $kegiatan = Kegiatan::paginate(5);
        return view('kegiatan.kegiatan', ['kegiatan' => $kegiatan]);
    }
}
