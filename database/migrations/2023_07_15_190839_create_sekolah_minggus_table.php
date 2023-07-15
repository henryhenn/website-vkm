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
        Schema::create('sekolah_minggus', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 55);
            $table->string('telepon', 14);
            $table->text('alamat');
            $table->string('kelas', 10);
            $table->string('sekolah', 50);
            $table->string('no_hp_papa', 14);
            $table->string('no_hp_mama', 14);
            $table->foreignId('kelas_sekolah_minggu_id')->constrained();
            $table->foreignId('status_qiu_dao_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekola_minggus');
    }
};
