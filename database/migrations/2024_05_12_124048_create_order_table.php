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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id_order');
            $table->string('status_pembayaran');
            $table->string('harga_bayar');
            $table->string('img_bukti_transfer');
            $table->integer('tgl_order');
            $table->text('tgl_verifikasi');
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('id_booth');
            $table->foreign('id_booth')->references('id_booth')->on('booths')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};