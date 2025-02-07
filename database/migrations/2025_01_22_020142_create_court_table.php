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
        Schema::create('court', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('court_type_id');
            $table->foreign('court_type_id')->references('id')->on('courttype');
            $table->text('name');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('court');
    }
};
