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
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->string('category');
            $table->string('location');
            $table->string('agent');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->json('images')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->string('slug')->unique();
            $table->boolean('featured');
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
