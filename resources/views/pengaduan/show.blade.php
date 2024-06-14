@extends('layouts.app')

@section('title')
Detail Pengaduan | Pengaduan Admin
@endsection

@section('content')
<h3>Detail Pengaduan</h3>

<div class="detail-container">
    <p><strong>Nama Pelapor:</strong> {{ $pengaduan->nama_pelapor }}</p>
    <p><strong>Telepon:</strong> {{ $pengaduan->telp_pelapor }}</p>
    <p><strong>Kategori:</strong> {{ $pengaduan->kategori->nama_pengaduan }}</p>
    <p><strong>Tersangka:</strong> {{ $pengaduan->tersangka }}</p>
    <p><strong>Tanggal Kejadian:</strong> {{ $pengaduan->tgl_kejadian }}</p>
    <p><strong>Isi Pengaduan:</strong> {{ $pengaduan->isi_pengaduan }}</p>

    <a href="/pengaduan" class="btn btn-back">Kembali</a>
</div>
@endsection

<style>
    .detail-container {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        max-width: 600px;
        margin: auto;
    }

    .detail-container p {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .btn-back {
        display: inline-block;
        padding: 10px 20px;
        background-color: #3490dc;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        margin-top: 20px;
    }

    .btn-back:hover {
        background-color: #2779bd;
    }
</style>
