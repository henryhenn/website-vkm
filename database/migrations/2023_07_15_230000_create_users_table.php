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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_indo', 100)->nullable();
            $table->string('nama_mandarin_hanzi', 100)->nullable()->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('nama_mandarin_pinyin', 100)->nullable();
            $table->string('tempat_lahir', 50)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->text('alamat')->nullable();
            $table->string('telp', 20)->nullable();
            $table->string('gol_darah')->nullable();
            $table->string('status_ketuhanan')->nullable();
            $table->string('status_vegetarian')->nullable();
            $table->string('status_qiu_dao')->nullable();
            $table->string('username', 50)->nullable();
            $table->string('password')->nullable();
            $table->boolean('reset_pass')->nullable();
            $table->string('image')->nullable();
            $table->boolean('active')->nullable()->default(0);
            $table->string('user_add', 100)->nullable();
            $table->string('user_update', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
