<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {


        // Create SuggestedTechnologies table
        Schema::create('suggested_technologies', function (blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });


        // // Create UserInterests table
        // Schema::create('user_interests', function (blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->foreignId('user_id')->constrained()->onDelete('cascade');
        //     $table->timestamps();
        // });

        // Create SuggestedCompanies table
        Schema::create('suggested_companies', function (blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('link');
            $table->string('address');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });

        // Create TechnologyRoadmap table
        Schema::create('technology_roadmap', function (blueprint $table) {
            $table->id();
            $table->string('technology_name');
            $table->text('description');
            $table->text('learning_path');
            $table->timestamps();
            // Add other relevant columns here
        });
    }

    public function down()
    {
        // Drop all the tables if migration is rolled back
        Schema::dropIfExists('suggested_technologies');
        Schema::dropIfExists('suggested_companies');
        Schema::dropIfExists('technology_roadmap');
    }
};
