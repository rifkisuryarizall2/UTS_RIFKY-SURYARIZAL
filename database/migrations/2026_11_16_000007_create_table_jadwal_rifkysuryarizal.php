<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('t_jadwal_rifkysuryarizal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelas_id')->constrained('t_kelas_rifkysuryarizal')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('pelajaran_id')->constrained('t_pelajaran_rifkysuryarizal')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('guru_id')->constrained('t_guru_rifkysuryarizal')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('hari', 10);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('t_jadwal_rifkysuryarizal');
    }
};
