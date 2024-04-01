<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Project;
use App\Models\Technology;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('project_tehcnology', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Project::class)->contrained()->cascadeOnDelete();
            $table->foreignIdFor(Technology::class)->contrained()->cascadeOnDelete();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_tehcnology');
    }
};
