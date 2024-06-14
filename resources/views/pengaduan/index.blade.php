@extends('layouts.app')

@section('title')
Pengaduan | Pengaduan Admin
@endsection

@section('content')
<h3>Daftar Pengaduan</h3>
<div class="action-bar">
    <div>
        <a href="/pengaduan/tambah" class="btn btn-tambah">Tambah Data</a>
        <a href="/pengaduan/report" class="btn btn-report">Cetak Data</a>
    </div>
    <form method="GET" action="/pengaduan" class="search-form">
        <input type="text" name="search" placeholder="Cari Pengaduan" value="{{ request()->get('search') }}">
        <button type="submit" class="btn btn-search">Cari</button>
    </form>
</div>

<table class="table-data">
    <thead>
        <tr>
            <th>Nama Pelapor</th>
            <th>Telepon</th>
            <th>Kategori</th>
            <th>Tersangka</th>
            <th>Tanggal Kejadian</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($pengaduans as $pengaduan)
        <tr>
            <td>{{ $pengaduan->nama_pelapor }}</td>
            <td>{{ $pengaduan->telp_pelapor }}</td>
            <td>{{ $pengaduan->kategori->nama_pengaduan }}</td>
            <td>{{ $pengaduan->tersangka }}</td>
            <td>{{ $pengaduan->tgl_kejadian }}</td>
            <td class="action-buttons">
                <a href="/pengaduan/show/{{ $pengaduan->id_pengaduan }}" class="btn btn-show" title="Lihat Detail">
                    <i class="fa fa-eye"></i>
                </a>
                <a href="/pengaduan/edit/{{ $pengaduan->id_pengaduan }}" class="btn btn-edit" title="Edit Pengaduan">
                    <i class="fa fa-pen"></i>
                </a>
                <a href="/pengaduan/delete/{{ $pengaduan->id_pengaduan }}" class="btn btn-delete" title="Hapus Pengaduan">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7">Tidak Ada Data Pengaduan</td>
        </tr>
        @endforelse
    </tbody>
</table>

{{ $pengaduans->links() }}
@endsection

<style>
    .action-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .action-bar div {
        display: absolute;
        gap: 10px;
    }

    .search-form {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .search-form input {
        padding: 6px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    .btn-search {
        padding: 6px 12px;
        border-radius: 4px;
        background-color: #3490dc;
        color: white;
        border: none;
        cursor: pointer;
    }

    .btn-search:hover {
        background-color: #2779bd;
    }

    .table-data {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .table-data th, .table-data td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }

    .table-data th {
        background-color: #f4f4f4;
    }

    .action-buttons {
        display: flex;
        gap: 10px;
    }

    .btn-show, .btn-edit, .btn-delete {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        text-decoration: none;
        color: white;
        cursor: pointer;
    }

    .btn-show {
        background-color: #38c172;
    }

    .btn-edit {
        background-color: #f6993f;
    }

    .btn-delete {
        background-color: #e3342f;
        border: none;
    }

    .btn-show:hover, .btn-edit:hover, .btn-delete:hover {
        opacity: 0.8;
    }

    .btn-tambah {
        padding: 6px 12px;
        border-radius: 4px;
        background-color: #3490dc;
        color: white;
        text-decoration: none;
        display: inline-block;
    }

    .btn-tambah:hover {
        background-color: #2779bd;
    }
</style>
