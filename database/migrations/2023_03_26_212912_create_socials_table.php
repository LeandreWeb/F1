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
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->string('twitterName');
            $table->string('twitterLink');
            $table->string('instagramName');
            $table->string('instagramLink');
            $table->string('websiteName');
            $table->string('websiteLink');
            $table->text('smallText');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socials');
    }
};
