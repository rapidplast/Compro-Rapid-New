<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->enum('category', ['Personal Care', 'Pharmacy', 'Dairly', 'Adibble Oil', 'Galon Cap']);  
            $table->string('foto');
            $table->timestamps();  
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product');   
    }
};
