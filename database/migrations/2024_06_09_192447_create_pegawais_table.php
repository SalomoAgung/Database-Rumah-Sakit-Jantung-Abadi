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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->string("ID_Pegawai")->unique();
            $table->string("Nama");
            $table->date("TTL_Pegawai");
            $table->string("Alamat");
            $table->enum("Gender", ["Male"], ["Female"]);
            $table->string("Telp_Pegawai");
            $table->enum("Role_Pegawai", ["Apoteker"], ["Perawat"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
