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
        Schema::create('dokters', function (Blueprint $table) {
            $table->string("ID_Dokter")->unique();
            $table->string("Nama_Dokter");
            $table->date("TTL_Dokter");
            $table->string("Alamat");
            $table->enum("Gender", ["Male"], ["Female"]);
            $table->string("Telp_dokter");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokters');
    }
};
