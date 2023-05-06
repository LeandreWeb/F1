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
        Schema::create('sprint_shootout_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId('sprint_shootout_id')->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->double("q1",6,3)->nullable();
            $table->double("q2",6,3)->nullable();
            $table->double("q3",6,3)->nullable();
            $table->integer("position");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sprint_shootout_results');
    }
};
