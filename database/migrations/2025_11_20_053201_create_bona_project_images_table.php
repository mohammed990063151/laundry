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
    Schema::create('bona_project_images', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('project_id');
        $table->string('image');
        $table->timestamps();

        $table->foreign('project_id')->references('id')->on('bona_project')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bona_project_images');
    }
};
