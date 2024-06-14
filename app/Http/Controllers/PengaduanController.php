<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Kategori;
use Illuminate\Http\Request;
use PDF;

class PengaduanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $pengaduans = Pengaduan::where('nama_pelapor', 'like', "%{$search}%")->paginate(10);
        return view('pengaduan.index', compact('pengaduans'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('pengaduan.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required|string|max:50',
            'telp_pelapor' => 'required|string|max:20',
            'kategori_id' => 'required|exists:kategoris,id',
            'tersangka' => 'required|string|max:100',
            'isi_pengaduan' => 'required|string',
            'tgl_kejadian' => 'required|date',
        ]);

        Pengaduan::create($request->all());

        return redirect('/pengaduan')->with('success', 'Pengaduan created successfully.');
    }

    public function show($id_pengaduan)
    {
        $pengaduan = Pengaduan::findOrFail($id_pengaduan);
        return view('pengaduan.show', compact('pengaduan'));
    }

    public function edit($id_pengaduan)
    {
        $pengaduan = Pengaduan::findOrFail($id_pengaduan);
        $kategoris = Kategori::all();
        return view('pengaduan.edit', compact('pengaduan', 'kategoris'));
    }

    public function update(Request $request, $id_pengaduan)
    {
        $request->validate([
            'nama_pelapor' => 'required|string|max:50',
            'telp_pelapor' => 'required|string|max:20',
            'kategori_id' => 'required|exists:kategoris,id',
            'tersangka' => 'required|string|max:100',
            'isi_pengaduan' => 'required|string',
            'tgl_kejadian' => 'required|date',
        ]);

        $pengaduan = Pengaduan::findOrFail($id_pengaduan);
        $pengaduan->update($request->all());

        return redirect('/pengaduan')->with('success', 'Pengaduan updated successfully.');
    }

    public function delete($id_pengaduan)
    {
        $pengaduan = Pengaduan::findOrFail($id_pengaduan);
        return view('pengaduan.delete', compact('pengaduan'));
    }

    public function destroy($id_pengaduan)
    {
        $pengaduan = Pengaduan::findOrFail($id_pengaduan);
        $pengaduan->delete();

        return redirect('/pengaduan')->with('success', 'Pengaduan deleted successfully.');
    }

    public function generateReport()
    {
        $pengaduans = Pengaduan::all();
        $pdf = PDF::loadView('pengaduan.report', compact('pengaduans'));
        return $pdf->download('pengaduan_report.pdf');
    }
}
