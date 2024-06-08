@extends('layouts.app')

@section('title')
Tambah Kategori | Pengaduan Admin
@endsection

@section('content')
<h3>Tambah Kategori Pengaduan</h3>

<div class="form-container">
    <form action="/kategori/store" method="POST">
        @csrf
        <div class="form-group">
            <label for="id">ID Kategori</label>
            <input type="text" name="id" id="id" required>
        </div>
        <div class="form-group">
            <label for="nama_pengaduan">Nama Kategori</label>
            <input type="text" name="nama_pengaduan" id="nama_pengaduan" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi"></textarea>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-simpan">Simpan</button>
        </div>
    </form>
</div>
@endsection

<style>
    .form-container {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        max-width: 600px;
        margin: auto;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
    }

    .form-group textarea {
        resize: vertical;
        height: 100px;
    }

    .form-actions {
        text-align: right;
    }

    .btn-simpan {
        padding: 10px 20px;
        background-color: #38c172;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    }

    .btn-simpan:hover {
        background-color: #2d995b;
    }
</style>
