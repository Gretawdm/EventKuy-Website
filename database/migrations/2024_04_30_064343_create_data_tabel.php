<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_tabel', function (Blueprint $table) {
            $table->string('pegawai_nama');
            $table->string('pegawai_jabatan');
            $table->string('pegawai_umur');
            $table->string('pegawai_alamat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_tabel');
    }
};