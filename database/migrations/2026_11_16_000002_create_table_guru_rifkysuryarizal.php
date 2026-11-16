<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('t_guru_rifkysuryarizal', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 20)->unique();
            $table->string('nama_guru', 100);
            $table->string('jenis_kelamin', 1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('t_guru_rifkysuryarizal');
    }
};
