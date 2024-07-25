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
        Schema::create('kalas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('number');
            $table->string('price');
            $table->string('category_parent');
            $table->string('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kalas');
    }
};