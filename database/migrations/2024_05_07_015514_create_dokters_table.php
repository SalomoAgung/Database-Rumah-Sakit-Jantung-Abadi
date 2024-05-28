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
            $table->string("id_dokter")->unique();
            $table->string("nama");
            $table->string("ttl");
            $table->string("alamat");
            $table->enum("gender", ["Male"], ["Female"]);
            $table->string("telp");
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
