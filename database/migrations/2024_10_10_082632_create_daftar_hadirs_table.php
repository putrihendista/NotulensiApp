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
        Schema::create('daftar_hadirs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_undangan')->constrained('undangans')->onDelete('cascade');
            $table->foreignId('id_jabatan')->constrained('jabatans')->onDelete('cascade');
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            $table->foreignId('id_acara')->constrained('acaras')->onDelete('cascade');
            $table->boolean('status'); 
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_hadirs');
    }
};
