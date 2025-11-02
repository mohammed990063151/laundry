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
    Schema::create('counters', function (Blueprint $table) {
        $table->id();
        $table->string('title1')->nullable();
        $table->integer('count1')->default(0);

        $table->string('title2')->nullable();
        $table->integer('count2')->default(0);

        $table->string('title3')->nullable();
        $table->integer('count3')->default(0);

        $table->string('title4')->nullable();
        $table->integer('count4')->default(0);

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counters');
    }
};
