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
        Schema::create('request_peminjaman', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->date('deadline');
            $table->string('deskripsi');
            $table->date('tanggal_pembayaran');
            $table->integer('jumlah')->default(0);
            $table->foreignId('costumer')->constrained('costumer')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_peminjaman');
    }
};
