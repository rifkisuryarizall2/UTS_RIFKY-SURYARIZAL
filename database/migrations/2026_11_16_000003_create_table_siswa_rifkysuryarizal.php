<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('t_siswa_rifkysuryarizal', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 20)->unique();
            $table->string('nama_siswa', 100);
            $table->string('jenis_kelamin', 1);
            $table->foreignId('jurusan_id')->constrained('t_jurusan_rifkysuryarizal')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('t_siswa_rifkysuryarizal');
    }
};
