<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use App\Berita;
use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all();
        $user = count($user);
        $berita = Berita::all();
        $berita = count($berita);
        $kegiatan = Kegiatan::all();
        $kegiatan = count($kegiatan);
        return view('dashboard.dashboard', ['user' => $user, 'kegiatan' => $kegiatan, 'berita' => $berita]);
    }
}
