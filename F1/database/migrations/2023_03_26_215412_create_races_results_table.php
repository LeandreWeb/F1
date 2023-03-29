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
        Schema::create('races_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('drivers_id')->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId('races_id')->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->time("total_time")->nullable();
            $table->time("best_lap")->nullable();
            $table->integer("position")->nullable();
            $table->integer("points")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('races_results');
    }
};
