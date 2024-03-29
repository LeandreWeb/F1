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
        Schema::create('team_drivers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('season_team_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_drivers');
    }
};
