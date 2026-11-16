<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('t_jurusan_rifkysuryarizal', function (Blueprint $table) {
            $table->id();
            $table->string('kode_jurusan', 20)->unique();
            $table->string('nama_jurusan', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('t_jurusan_rifkysuryarizal');
    }
};
