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
        Schema::create('house_categories', function (Blueprint $table) {
            $table->id('id');
            $table->string('Type');
            $table->string('Address');
            $table->integer('Number_of_bedrooms');
            $table->integer('Number_of_bathrooms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_categories');
    }
};
