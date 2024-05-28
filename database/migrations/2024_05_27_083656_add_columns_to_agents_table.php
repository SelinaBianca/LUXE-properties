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
        Schema::table('agents', function (Blueprint $table) {

            $table->string('contact_email')->after('email');
            $table->string('contact_phone')->after('phone');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('create_agents', function (Blueprint $table) {

            $table->dropColumn('contact_email');
            $table->dropColumn('contact_phone');
        });


    }

};





