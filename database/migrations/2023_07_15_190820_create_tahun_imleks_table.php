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
        Schema::create('tahun_imleks', function (Blueprint $table) {
            $table->id();
            $table->date('dari');
            $table->date('sampai');
            $table->string('tahun_imlek_mandarin', 50);
            $table->string('tahun_imlek_pinyin', 50);
            $table->string('nama_tahun_mandarin', 50);
            $table->string('nama_tahun_pinyin', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tahun_imleks');
    }
};
