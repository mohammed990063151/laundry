<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('bona_about_sections', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title')->nullable();
            $table->text('hero_description')->nullable();
            $table->string('hero_image')->nullable();

            $table->string('about_title')->nullable();
            $table->text('about_text')->nullable();
            $table->string('about_image')->nullable();

            $table->text('vision_text')->nullable();
            $table->text('mission_text')->nullable();
            $table->text('values_text')->nullable();

            $table->string('story_title')->nullable();
            $table->text('story_text')->nullable();
            $table->string('story_image')->nullable();

            $table->text('team_section')->nullable();
            $table->text('partners_section')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('bona_about_sections');
    }
};
