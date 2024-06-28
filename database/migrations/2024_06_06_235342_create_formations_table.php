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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('description')->nullable();
            $table->text('categorie')->nullable();
            $table->string('pdf')->nullable();
            $table->string('lieu')->nullable();
            $table->string('cover')->nullable();
            $table->string('is_active')->default("1");
            $table->string('access')->default("0");
            $table->string('video')->nullable();
            $table->date('datePublication')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
