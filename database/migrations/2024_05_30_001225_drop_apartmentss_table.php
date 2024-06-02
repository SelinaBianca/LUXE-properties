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
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('apartmentss', function (Blueprint $table) {
            $table->id();
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('category', 20)->nullable();
            $table->string('location')->nullable();
            $table->string('agent')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('featured')->default(0);
            $table->integer('beds')->nullable();
            $table->integer('baths')->nullable();
            $table->binary('img1');
            $table->binary('img2');
            $table->binary('img3');
            $table->binary('img4');
            $table->binary('img5');
            $table->binary('img6');
            $table->binary('img7');
            $table->timestamps();
    });
    }
};
