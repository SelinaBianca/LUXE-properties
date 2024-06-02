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
            $table->binary('img1')->nullable()->change();
            $table->binary('img2')->nullable()->change();
            $table->binary('img3')->nullable()->change();
            $table->binary('img4')->nullable()->change();
            $table->binary('img5')->nullable()->change();
            $table->binary('img6')->nullable()->change();
            $table->binary('img7')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('apartments', function (Blueprint $table) {
            $table->binary('img1')->nullable(false)->change();
            $table->binary('img2')->nullable(false)->change();
            $table->binary('img3')->nullable(false)->change();
            $table->binary('img4')->nullable(false)->change();
            $table->binary('img5')->nullable(false)->change();
            $table->binary('img6')->nullable(false)->change();
            $table->binary('img7')->nullable(false)->change();
        });
    }
};
