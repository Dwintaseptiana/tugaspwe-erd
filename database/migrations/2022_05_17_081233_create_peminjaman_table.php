<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->date('deadlinetanggal_pengembalian');
            $table->date('pembayarantanggal');
            $table->foreignId('deadline')->constrained('deadline')->onDelete('cascade');
            $table->foreignId('pembayaran')->constrained('pembayaran')->onDelete('cascade');
            $table->foreignId('peminjam')->constrained('peminjam')->onDelete('cascade');
            $table->foreignId('pegadaian')->constrained('pegadaian')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
};
