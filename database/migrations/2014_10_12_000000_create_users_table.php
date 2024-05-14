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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_perusahaan')->unique();
            $table->string('alamat_perusahaan');
            $table->string('no_telp');
            $table->string('email')->unique();
            $table->string('password');
            // $table->enum('status_verifikasi', ['unverified', 'verified'])->default('unverified')->nullable();
            $table->enum('jabatan', ['admin', 'pembuat'])->default('pembuat');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};