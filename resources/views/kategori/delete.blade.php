@extends('layouts.app')

@section('title')
Hapus Kategori | Pengaduan Admin
@endsection

@section('content')
<h3>Hapus Kategori Pengaduan</h3>

<div class="form-delete">
    <h4>Ingin Menghapus Data?</h4>
    <div class="action-buttons">
        <button class="btn btn-yes">
            <a href="{{ url('/kategori/destroy/' . $kategori->id) }}">
                Yes
            </a>
        </button>
        <button class="btn btn-no">
            <a href="/kategori">
                No
            </a>
        </button>
    </div>
</div>
@endsection

<style>
    .form-delete {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        text-align: center;
        max-width: 400px;
        margin: auto;
    }

    .form-delete h4 {
        font-size: 18px;
        margin-bottom: 20px;
    }

    .action-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .btn-yes, .btn-no {
        width: 100px;
        padding: 10px;
        background-color: #e3342f;
        color: white;
        text-decoration: none;
        text-align: center;
        border-radius: 4px;
    }

    .btn-no {
        background-color: #38c172;
    }

    .btn-yes:hover, .btn-no:hover {
        opacity: 0.8;
    }

    .btn-yes a, .btn-no a {
        color: white;
        text-decoration: none;
        display: block;
    }
</style>
