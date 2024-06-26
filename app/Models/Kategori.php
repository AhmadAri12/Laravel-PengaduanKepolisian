<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris';
    protected $fillable = [
        'id', 'nama_pengaduan', 'deskripsi'
    ];

    public $incrementing = false; 
    protected $keyType = 'string';
}
