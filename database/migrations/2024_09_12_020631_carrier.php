<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('carrier', function (Blueprint $table) {
            $table->id();
            $table->string('jenis');
            $table->string('penempatan');
            $table->string('jobdesk');
            $table->string('kualifikasi');
            $table->string('foto');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('carrier');
    }
};
