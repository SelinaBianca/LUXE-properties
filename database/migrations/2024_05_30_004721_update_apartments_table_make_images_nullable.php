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
        Schema::table('apartments', function (Blueprint $table) {
            $table->string('img1')->nullable()->change();
            $table->string('img2')->nullable()->change();
            $table->string('img3')->nullable()->change();
            $table->string('img4')->nullable()->change();
            $table->string('img5')->nullable()->change();
            $table->string('img6')->nullable()->change();
            $table->string('img7')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('apartments', function (Blueprint $table) {
            $table->string('img1')->nullable(false)->change();
            $table->string('img2')->nullable(false)->change();
            $table->string('img3')->nullable(false)->change();
            $table->string('img4')->nullable(false)->change();
            $table->string('img5')->nullable(false)->change();
            $table->string('img6')->nullable(false)->change();
            $table->string('img7')->nullable(false)->change();
        });
    }
};
