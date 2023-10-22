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
        Schema::create('absensi_sekolah_minggu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('absensi_id')->constrained();
            $table->foreignId('sekolah_minggu_id')->constrained('sekolah_minggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi_sekolah_minggu');
    }
};
