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
        Schema::create('ritual', function (Blueprint $table) {
            $table->id();
            $table->foreignId('acara_id')->nullable()->constrained('acara');
            $table->string('acara', 200)->nullable();
            $table->foreignId('tahun_imlek_id')->nullable()->constrained('tahun_imlek');
            $table->text('ritual1')->nullable();
            $table->text('ritual2')->nullable();
            $table->text('dupa1')->nullable();
            $table->text('dupa2')->nullable();
            $table->text('sujud1')->nullable();
            $table->text('sujud2')->nullable();
            $table->text('note')->nullable();
            $table->string('user_modify', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ritual');
    }
};
