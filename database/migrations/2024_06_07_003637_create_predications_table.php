<?php

use App\Models\video;
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
        Schema::create('predications', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('subtitle')->nullable();
            $table->text('description')->nullable();
            $table->string('cover')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('predicateur')->nullable();
            $table->string('profil')->nullable();
            $table->string('is_seminary')->default("false");
            $table->string('is_video')->default("false");
            $table->string('url_video')->nullable();
            $table->integer('nbrseminary')->nullable();
            $table->foreignIdFor(video::class)->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('predications');
    }
};
