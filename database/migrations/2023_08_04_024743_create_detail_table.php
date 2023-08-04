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
        Schema::create('detail', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('id_tanaman');
            $table->foreign('id_tanaman')->references('id_tanaman')->on('tanaman')->onDelete('cascade');
            $table->unsignedBigInteger('id_perbaikan');
            $table->foreign('id_perbaikan')->references('id_perbaikan')->on('perbaikan')->onDelete('cascade');
            $table->unsignedBigInteger('id_image');
            $table->foreign('id_image')->references('id')->on('image')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail');
    }
};
