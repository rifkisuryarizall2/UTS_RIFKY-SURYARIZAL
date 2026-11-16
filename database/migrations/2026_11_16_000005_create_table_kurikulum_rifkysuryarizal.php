<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('t_kurikulum_rifkysuryarizal', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kurikulum', 20)->unique();
            $table->string('nama_kurikulum', 100);
            $table->string('tahun', 4);
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('t_kurikulum_rifkysuryarizal');
    }
};
