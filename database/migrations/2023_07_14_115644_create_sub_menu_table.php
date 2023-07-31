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
        Schema::create('sub_menu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained('menu');
            $table->string('sub_menu', 128);
            $table->string('url', 128);
            $table->string('icon', 128)->nullable();
            $table->boolean('active');
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
        Schema::dropIfExists('sub_menu');
    }
};
