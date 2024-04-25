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
        Schema::create('detail_event_tabel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('poster');
            $table->string('nama_event');
            $table->string('ktp');
            $table->string('deskripsi_event');
            $table->string('contact_person');
            $table->string('event_organizer');
            $table->string('event_owner');
            $table->date('tanggal_event');
            $table->integer('no_rek');
            $table->string('nama_rekening');
            $table->string('alamat_event');
            $table->date('tanggal_pendaftaran_booth_tenant');
            $table->string('booth');
            $table->string('denah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_event_tabel');
    }
};