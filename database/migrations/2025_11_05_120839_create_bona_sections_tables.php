<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('bona_hero_sections', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('subtitle')->nullable();
        $table->text('description')->nullable();
        $table->string('video_url')->nullable();
        $table->string('background_video')->nullable();
        $table->timestamps();
    });



   Schema::create('bona_projects', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('location')->nullable();
        $table->text('description')->nullable();
        $table->string('image')->nullable();
        $table->integer('sort_order')->default(0);
        $table->timestamps();
    });

    Schema::create('bona_partners', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('logo')->nullable();
        $table->string('link')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bona_sections_tables');
    }
};
