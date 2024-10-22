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
        // Buat tabel 'users' dengan kolom yang sesuai
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('npm');
            $table->foreignId('kelas_id')->constrained(); // Foreign key ke tabel 'kelas'
            $table->string('jurusan'); // Kolom 'jurusan' ditambahkan di sini
            $table->integer('semester'); // Kolom 'semester' ditambahkan di sini
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Hapus tabel 'users' jika rollback dilakukan
        Schema::dropIfExists('users');
    }
};
