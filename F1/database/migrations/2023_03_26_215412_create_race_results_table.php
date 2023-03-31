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
        Schema::create('race_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId('race_id')->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->time("total_time")->nullable();
            $table->double("best_lap",6,3)->nullable();
            $table->integer("position")->nullable();
            $table->integer("points")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('race_results');
    }
};
