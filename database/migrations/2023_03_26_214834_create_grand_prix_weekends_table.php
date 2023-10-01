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
        Schema::create('grand_prix_weekends', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->string("status");
            $table->foreignId('country_id')->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId('race_id')->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId('qualification_id')->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId('sprint_id')->nullable()->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId('sprint_shootout_id')->nullable()->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId('track_id')->nullable()->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grand_prix');
    }
};
