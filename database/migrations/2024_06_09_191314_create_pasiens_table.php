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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->string("ID_Pasien")->unique();
            $table->string("Nama");
            $table->date("TTL_Pasien");
            $table->string("Alamat");
            $table->enum("Gender", ["Male"], ["Female"]);
            $table->string("Telp_Pasien");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
