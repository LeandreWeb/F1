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
        Schema::create('teams_chiefs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teams_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string("firstname");
            $table->string("Lastname");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams_chiefs');
    }
};
