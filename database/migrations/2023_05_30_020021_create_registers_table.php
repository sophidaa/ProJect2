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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('dla_fname')->nullable();
            $table->string('dla_lname')->nullable();
            $table->integer('dla_tel')->nullable();
            $table->string('dla_prov')->nullable();
            $table->string('dla_name')->nullable();
            $table->integer('dla_status')->default(0);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');

    }
    
    

};
