<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('t_nilai_rifkysuryarizal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('t_siswa_rifkysuryarizal')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('pelajaran_id')->constrained('t_pelajaran_rifkysuryarizal')->cascadeOnUpdate()->cascadeOnDelete();
            $table->decimal('tugas', 5, 2)->default(0);
            $table->decimal('uts', 5, 2)->default(0);
            $table->decimal('uas', 5, 2)->default(0);
            $table->string('semester', 10);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('t_nilai_rifkysuryarizal');
    }
};
