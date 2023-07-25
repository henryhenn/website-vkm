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
        Schema::create('qiudao', function (Blueprint $table) {
            $table->id();
            $table->integer('no_urut')->nullable();
            $table->string('nama_indo', 100)->nullable();
            $table->string('nama_mandarin_hanzi', 100)->nullable();
            $table->string('nama_mandarin_pinyin', 100)->nullable();
            $table->date('tgl_indo')->nullable();
            $table->string('bln_imlek', 2)->nullable();
            $table->string('tgl_imlek', 2)->nullable();
            $table->string('jenis_kelamin', 1)->nullable();
            $table->text('alamat')->nullable();
            $table->string('telp', 20)->nullable();
            $table->string('pengajak')->nullable();
            $table->string('penanggung')->nullable();
            $table->string('pandita')->nullable();
            $table->integer('amal')->nullable();
            $table->string('user_add', 100)->nullable();
            $table->string('user_update', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qiudao');
    }
};
