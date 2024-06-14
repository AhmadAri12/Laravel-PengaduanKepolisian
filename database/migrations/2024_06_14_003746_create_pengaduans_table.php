<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduansTable extends Migration
{
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id('id_pengaduan')->primary();
            $table->string('nama_pelapor', 50);
            $table->string('telp_pelapor', 20);
            $table->string('kategori_id'); // Foreign key, now a string
            $table->string('tersangka', 100);
            $table->text('isi_pengaduan');
            $table->date('tgl_kejadian');
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengaduan');
    }
}

