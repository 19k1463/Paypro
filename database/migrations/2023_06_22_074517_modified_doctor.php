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
        Schema::table('doctor', function (Blueprint $table) {
            
            
            $table->string('diagonosis');
            $table->string('reason');
            $table->string('food_to_eat');
            $table->integer('level_of_danger');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doctor', function (Blueprint $table) {
            $table->dropColumn(['diagonosis','reason','food_to_eat','level_of_danger']);
        });
    }
};
