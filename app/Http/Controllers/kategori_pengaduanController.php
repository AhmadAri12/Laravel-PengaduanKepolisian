<?php
namespace App\Http\Controllers;

use App\Models\kategori_pengaduan;
use Illuminate\Http\Request;

class kategori_pengaduanController extends Controller
{
    public function index()
    {
        $kategori = kategori_pengaduan::all();
        return view('kategori.kategori-pengaduan', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.kategori-entry');
    }

    public function store(Request $request)
    {
       $request->validate([
            'nama_pengaduan' => 'required',
            'deskripsi' => 'required',
        ]);
        kategori_pengaduan::create([
            'nama_pengaduan' => $request->nama_pengaduan,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/kategori');
    }
    public function updatedata(Request $request, $id_kategori)
    {
        $request->validate([
            'nama_pengaduan' => 'required',
            'deskripsi' => 'required',
        ]);

        $kategori = kategori_pengaduan::find($id_kategori);
        if (!$kategori) {
            return redirect()->route('kategori')->with('error', 'Kategori tidak ditemukan.');
        }

        $kategori->update([
            'nama_pengaduan' => $request->nama_pengaduan,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('kategori')->with('success', 'Kategori berhasil diperbarui.');
    }


    public function deletedata($id_kategori)
    {
        $kategori = kategori_pengaduan::find($id_kategori);
        if (!$kategori) {
            return redirect()->route('kategori')->with('error', 'Kategori tidak ditemukan.');
        }

        $kategori->delete();
        return redirect()->route('kategori')->with('danger', 'Kategori berhasil dihapus.');
    }

    
}
