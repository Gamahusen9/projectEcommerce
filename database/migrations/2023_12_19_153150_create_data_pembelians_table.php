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
        Schema::create('data_pembelians', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal_pembelian');
            $table->text('ulasan');
            $table->char('metode_pembayaran');
            $table->char('harga', 255);
            $table->char('id_produk');
            $table->char('id_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pembelians');
    }
};
