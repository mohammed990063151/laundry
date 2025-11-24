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
    Schema::create('bona_service_details', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('bona_service_id');

        $table->string('title')->nullable();       // عنوان جزء من التفاصيل
        $table->text('long_description')->nullable(); // وصف طويل
        $table->string('image')->nullable();       // صورة أساسية
        $table->json('gallery')->nullable();       // مجموعة صور (JSON)
        $table->json('features')->nullable();      // نقاط مميزات
        $table->string('video_url')->nullable();   // فيديو اختياري
        $table->integer('sort_order')->default(0); // ترتيب الظهور

        $table->timestamps();

        $table->foreign('bona_service_id')
              ->references('id')->on('bona_services')
              ->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bona_service_details');
    }
};
