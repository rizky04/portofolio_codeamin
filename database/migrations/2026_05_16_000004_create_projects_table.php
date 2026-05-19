<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('thumbnail')->nullable();
            $table->string('demo_url')->nullable();
            $table->string('github_url')->nullable();
            $table->string('category')->nullable();
            $table->enum('status', ['published', 'draft'])->default('draft');
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        Schema::create('project_technology', function (Blueprint $table) {
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->foreignId('technology_id')->constrained()->cascadeOnDelete();
            $table->primary(['project_id', 'technology_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_technology');
        Schema::dropIfExists('projects');
    }
};
