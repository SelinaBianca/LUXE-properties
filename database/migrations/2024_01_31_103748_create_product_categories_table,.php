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
        Schema::create('product_categories', function (Blueprint $table) {
            // $table->id();

            // $table->string('name')->unique();

            // $table->string('slug')->unique();

            // $table->longText('description')->nullable();

            // $table
            // ->foreignId('parent_id')
            // ->nullable()
            // ->constrained('product_categories', 'id')
            // ->nullOnDelete();

            // $table->boolean('status')->default(true);



            // $table->timestamps();
            $table->id('Property_ID')->unique();
            $table->string('Type');
            $table->string('Adress');
            $table->integer('Number_of_bedrooms');
            $table->integer('Number_of_bathroom');
            $table->string('Agent');
            $table->string('Agent_ID')->unique();
            $table->string('Agent_Contact_Number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_categories');
    }
};
