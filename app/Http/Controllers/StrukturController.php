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
    public function tambah_struktur()
    {
        $dok = Struktur::all();
        return view('struktur.tambahstruktur');
    }

    public function editStruktur($id)
    {
        $dok = Struktur::find($id);
        return view('struktur.editstruktur', ['struktur' => $dok]);
    }

    public function create(Request $request)
    {
        // return $request;
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        Struktur::create($request->all());
        return redirect('/struktur')->with('sukses', 'Data Berhasil Di Simpan!');
    }


    public function delete($id)
    {
        $user = Struktur::find($id);
        $user->delete($user);
        return redirect('/struktur')->with('sukses', 'Data berhasil dihapus!');
    }
}
