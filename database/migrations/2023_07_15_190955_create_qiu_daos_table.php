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
        Schema::create('qiu_daos', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 55);
            $table->string('telepon', 14);
            $table->string('nama_mandarin_hanzi', 55);
            $table->string('nama_mandarin_pinyin', 55);
            $table->string('yin_shi', 55);
            $table->date('tanggal_indonesia');
            $table->string('bulan_tanggal_imlek', 10);
            $table->string('tahun_tanggal_imlek', 4);
            $table->string('bao_shi', 55);
            $table->enum('jenis_kelamin', ['Pria', 'Wanita', 'Anak Laki', 'Anak Perempuan']);
            $table->string('dian_chuan_shi', 55);
            $table->text('alamat');
            $table->integer('amal_paramita');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qiu_daos');
    }
};
