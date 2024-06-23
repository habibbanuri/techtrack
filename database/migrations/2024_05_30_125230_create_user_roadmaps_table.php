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
        Schema::create('user_roadmaps', function (Blueprint $table) {
            $table->id();
            $table->longText('roadmap');
            $table->string('technology');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->boolean('beginner_completed')->default(false);
            $table->boolean('intermediate_completed')->default(false);
            $table->boolean('advanced_completed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_roadmaps');
    }
};
