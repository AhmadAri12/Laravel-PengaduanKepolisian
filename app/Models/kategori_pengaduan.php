<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_pengaduan extends Model
{
    use HasFactory;
    protected $table = 'kategori_pengaduans';
    protected $primaryKey = 'id_kategori';
    public $incrementing = true;
    protected $fillable = ['nama_pengaduan', 'deskripsi'];
    public $timestamps = false;

}
