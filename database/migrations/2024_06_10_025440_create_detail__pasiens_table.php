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
        Schema::create('detail__pasiens', function (Blueprint $table) {
            $table->string("ID_Detail_Pasien")->unique();
            $table->string("ID_Pasien")->unique();
            $table->string("ID_Dokter")->unique();
            $table->string("Tekanan_Darah");
            $table->string("Detak_Jantung");
            $table->string("Gula_Darah");
            $table->string("ID_Penyakit")->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail__pasiens');
    }
};
