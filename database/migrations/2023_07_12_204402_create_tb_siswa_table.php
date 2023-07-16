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
        Schema::create('tb_siswa', function (Blueprint $table) {
            $table->increments('id_siswa');
            $table->string('nisn', 20);
            $table->string('nama', 50);
            $table->string('alamat');
            $table->string('no_telp', 20);
            $table->string('id_spp', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_siswa');
    }
};
