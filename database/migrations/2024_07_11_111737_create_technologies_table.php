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
        Schema::create('technologies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('job_keyword')->nullable();
            $table->string('rank')->nullable();
            $table->string('change_in_rank')->nullable();
            $table->string('salary')->nullable();
            $table->string('change_in_salary')->nullable();
            $table->string('live_jobs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technologies');
    }
};
