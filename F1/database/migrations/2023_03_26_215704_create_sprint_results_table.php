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
        Schema::create('sprint_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId('sprint_id')->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->time("total_time");
            $table->time("best-lap");
            $table->integer("position");
            $table->integer("points");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sprint_results');
    }
};
