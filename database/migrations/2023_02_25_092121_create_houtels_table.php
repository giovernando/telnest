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
        Schema::create('houtels', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cities_id');
            $table->string('address');
            $table->text('about');
            $table->text('fasility');
            $table->string('photo');
            $table->enum('rekomendation',['no','yes']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houtels');
    }
};
