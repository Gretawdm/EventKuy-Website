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
        Schema::create('tenant_tabel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_booth');
            $table->string('nama_pemilik');
            $table->string('no_telp');
            $table->string('foto');
            $table->string('ktp');
            $table->string('booth');
            $table->string('harga_booth');
            $table->enum('status_verifikasi', ['unverified', 'verified'])->default('unverified')->nullable();    
            $table->string('bukti_transfer');
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_tabel');
    }
};