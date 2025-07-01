<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inovation', function(Blueprint $table){
            $table->id();
            $table->enum('kategory', ['Personal Care', 'Pharmacy', 'Food dan Beverage']);
            $table->string('judul');
            $table->string('foto');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inovation');
    }
};
