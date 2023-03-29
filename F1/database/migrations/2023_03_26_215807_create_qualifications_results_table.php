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
        Schema::create('qualifications_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('drivers_id')->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId('qualifications_id')->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->time("q1")->nullable();
            $table->time("q2")->nullable();
            $table->time("q3")->nullable();
            $table->integer("position");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qualifications_results');
    }
};
