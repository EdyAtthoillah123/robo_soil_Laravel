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
        Schema::create('image', function (Blueprint $table) {
            $table->id();
            $table->string('imagepath', 255);
            $table->string('nitrogen', 30)->nullable();
            $table->string('phosporus', 30)->nullable();
            $table->string('kalium', 30)->nullable();
            $table->timestamps();
            // $table->unsignedBigInteger('id_user');
            // $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image');
    }
};
