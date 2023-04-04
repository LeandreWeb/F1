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
        Schema::create('race_stories', function (Blueprint $table) {
            $table->id();
            $table->string("catchphrase");
            $table->text("intro");
            $table->text("first_part");
            $table->text("middle_part");
            $table->text("last_part");
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
        Schema::dropIfExists('race_stories');
    }
};
