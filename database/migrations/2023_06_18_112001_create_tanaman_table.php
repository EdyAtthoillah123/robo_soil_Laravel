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
        Schema::create('tanaman', function (Blueprint $table) {
            $table->id('id_tanaman')->autoIncrement();
            $table->string('lahan', 100);
            $table->string('dataran', 100);
            $table->string('saran_tanaman', 255);
            $table->timestamps();
            // $table->foreign('id_tanaman')->references('id')->on('image')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanaman');
    }
};
