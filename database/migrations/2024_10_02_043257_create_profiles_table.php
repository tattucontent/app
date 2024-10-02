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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('age');
            $table->string('email')->unique();
            $table->string('job');  // Job field
            $table->text('job_description');  // Job description field
            $table->integer('years_of_experience');  // Years of experience field
            $table->string('reference_name');  // Reference name field
            $table->text('reference_details');  // Reference details field
            $table->string('contact')->nullable(); // Contact information field (optional)
            $table->string('photo')->nullable(); // Add this line for the photo field


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
