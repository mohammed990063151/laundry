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
    Schema::create('bona_services_settings', function (Blueprint $table) {
        $table->id();

        // Hero
        $table->string('hero_title')->nullable();
        $table->text('hero_subtitle')->nullable();
        $table->string('hero_background')->nullable(); // مسار الصورة

        // Why Us
        $table->string('whyus_badge')->nullable();     // "لماذا تختار بونا؟"
        $table->string('whyus_title')->nullable();
        $table->text('whyus_text')->nullable();
        $table->string('whyus_image')->nullable();

        // Big image section
        $table->string('big_image')->nullable();

        // CTA
        $table->string('cta_title')->nullable();
        $table->text('cta_subtitle')->nullable();
        $table->string('cta_button_text')->nullable();
        $table->string('cta_button_link')->nullable();
        $table->string('cta_background')->nullable();

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bona_services_settings');
    }
};
