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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_indonesia', 50);
            $table->string('nama_mandarin_hanzi', 50);
            $table->string('nama_mandarin_pinyin', 50);
            $table->string('tempat_lahir', 20);
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('telepon', 14);
            $table->foreignId('golongan_darah_id')->constrained();
            $table->foreignId('status_ketuhanan_id')->constrained();
            $table->foreignId('status_vegetarian_id')->constrained();
            $table->foreignId('status_qiu_dao_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
