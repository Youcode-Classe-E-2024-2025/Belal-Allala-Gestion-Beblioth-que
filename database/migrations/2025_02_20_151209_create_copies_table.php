<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('copies', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('book_id')->constrained()->onDelete('cascade');
            $table->enum('status', ['available', 'borrowed', 'damaged', 'lost'])->default('available');
            $table->string('barcode')->unique();
            $table->date('acquisition_date')->nullable();
            $table->timestamps();

            $table->index('book_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('copies');
    }
};