<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use PDF;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $kategori = Kategori::where('nama_pengaduan', 'like', "%{$search}%")->paginate(10);
        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pengaduan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        Kategori::create($request->all());

        return redirect('/kategori')->with('success', 'Kategori created successfully.');
    }

    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.show', compact('kategori'));
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'nama_pengaduan' => 'required',
            'deskripsi' => 'required',
        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->id = $request->id; 
        $kategori->nama_pengaduan = $request->nama_pengaduan;
        $kategori->deskripsi = $request->deskripsi;
        $kategori->save();

        return redirect('/kategori')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function delete($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.delete', compact('kategori'));
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect('/kategori')->with('success', 'Kategori deleted successfully.');
    }
    public function generateReport()
    {
        $kategori = Kategori::all();
        $pdf = PDF::loadView('kategori.report', compact('kategori'));
        return $pdf->download('kategori_report.pdf');
    }

}
