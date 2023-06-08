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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();

            $table->string('property_name')->nullable();
            $table->string('location')->nullable();
            $table->string('floor_area')->nullable();
            $table->string('rental_fee')->nullable();
            $table->string('other_features')->nullable();
            $table->string('status')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('user_id')->nullable()->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
