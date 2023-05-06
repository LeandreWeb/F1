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
        Schema::create('sprint_shootout_stories', function (Blueprint $table) {
            $table->id();
            $table->string("catchphrase");
            $table->text("intro");
            $table->text("q3");
            $table->text("q2");
            $table->text("q1");
            $table->text("conclusion");
            $table->text("extra")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sprint_shootout_stories');
    }
};
