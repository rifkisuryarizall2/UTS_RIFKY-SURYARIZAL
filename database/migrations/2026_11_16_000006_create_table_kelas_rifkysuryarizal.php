<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('t_kelas_rifkysuryarizal', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kelas', 20)->unique();
            $table->string('nama_kelas', 50);
            $table->foreignId('jurusan_id')->constrained('t_jurusan_rifkysuryarizal')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('guru_id')->constrained('t_guru_rifkysuryarizal')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('kurikulum_id')->constrained('t_kurikulum_rifkysuryarizal')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('t_kelas_rifkysuryarizal');
    }
};
