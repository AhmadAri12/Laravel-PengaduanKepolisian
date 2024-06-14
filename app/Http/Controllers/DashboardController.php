<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPengaduan = Pengaduan::count();
        $totalKategori = Kategori::count();

        return view('dashboard.index', compact('totalPengaduan', 'totalKategori'));
    }
}

