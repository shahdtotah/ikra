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

            Schema::create('favorites', function (Blueprint $table) {
           
                $table->unsignedBigInteger('userId');
                $table->unsignedBigInteger('bookId');
                $table->timestamps();
    
                $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('bookId')->references('id')->on('books')->onDelete('cascade');
            });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};
