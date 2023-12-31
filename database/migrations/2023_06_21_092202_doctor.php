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
            Schema::create('doctor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id')->nullable(); // Add nullable() if appropriate
            $table->foreign('users_id')->references('id')->on('users');

                 //okay so do remember//  
            });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
