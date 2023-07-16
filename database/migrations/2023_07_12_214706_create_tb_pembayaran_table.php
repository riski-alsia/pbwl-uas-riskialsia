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
        Schema::create('tb_pembayaran', function (Blueprint $table) {
            $table->increments('id_pembayaran');
            $table->string('nisn', 10);
            $table->string('tgl_bayar', 15);
            $table->string('bulan_bayar', 15);
            $table->string('tahun_bayar', 15);
            $table->string('id_spp', 10);
            $table->string('jumlah_bayar', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pembayaran');
    }
};
