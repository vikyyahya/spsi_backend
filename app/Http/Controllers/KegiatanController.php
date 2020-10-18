<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class KegiatanController extends Controller
{
    //
    public function index()
    {
        $kegiatan = Kegiatan::paginate(5);
        return view('kegiatan.kegiatan', ['kegiatan' => $kegiatan]);
    }
    public function tambah_kegiatan()
    {
        $dok = Kegiatan::all();
        return view('kegiatan.tambahkegiatan');
    }

    public function create(Request $request)
    {
        // return $request;
        $request->validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'file' => 'required|max:2048',
        ]);
        $berita = new Kegiatan();

        $data = $request->all();
        $date_time = date("Y-m-d h:i:s a", time());
        $fileName = Str::slug($request->title) . $date_time . '.' . $request->file->extension();
        $fileName = str_replace(':', '', $fileName);
        $fileName = str_replace(' ', '', $fileName);
        $fileName = str_replace('-', '', $fileName);
        // return $request;
        $request->file->move(public_path('uploads'), $fileName);

        $berita->title = $request->title;
        $berita->deskripsi = $request->deskripsi;
        $berita->image = $fileName;

        if ($berita->save()) {
            return redirect('/kegiatan')->with('sukses', 'Data Berhasil Di Upload!');
        } else {
            return redirect()->back()->with('message-danger', 'Data gagal di input!');
        }

        // Berita::create([
        //     'title' =>  $data['title'],
        //     'deskripsi' => $data['deskripsi'],
        //     'image' => $fileName

        // ]);
        // return redirect('/berita')->with('sukses', 'Data Berhasil Di Upload!');
    }
    public function delete($id)
    {
        $user = Kegiatan::find($id);
        $user->delete($user);
        return redirect('/kegiatan')->with('sukses', 'Data berhasil dihapus!');
    }
}
