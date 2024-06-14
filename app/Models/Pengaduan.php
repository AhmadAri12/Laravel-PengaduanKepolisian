<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pengaduan';
    protected $fillable = [
        'nama_pelapor',
        'telp_pelapor',
        'kategori_id',
        'tersangka',
        'isi_pengaduan',
        'tgl_kejadian',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
    
}

