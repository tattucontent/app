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
        Schema::table('users', function (Blueprint $table) {
            //
        // Adding new fields to the 'users' table
        // $table->string('address')->nullable();
        // $table->string('phone_number')->nullable();
        // $table->date('birthdate')->nullable();

        // // Adding the new fields requested
        // $table->string('photo')->nullable(); // Path to the uploaded photo
        // $table->string('job')->nullable(); // Job title
        // $table->text('job_description')->nullable(); // Job description
        // $table->string('reference')->nullable(); // Reference name
        // // $table->string('reference_title')->nullable(); // Reference title


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
