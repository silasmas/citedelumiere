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
        Schema::create('parcourts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')
            ->onDelete('cascade');
        $table->foreignId('formation_id')->constrained()->onUpdate('cascade')
            ->onDelete('cascade');
        $table->foreignId('chapitre_id')->constrained()->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('etat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcourts');
    }
};
