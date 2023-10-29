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
        Schema::create('sekolah_minggu', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->foreignId('kelas_id')->constrained();
            $table->string('telp', 14);
            $table->string('nama_ortu', 100);
            $table->string('status_qiu_dao', 10);
            $table->string('user_add', 10);
            $table->string('user_update', 10)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah_minggu');
    }
};
