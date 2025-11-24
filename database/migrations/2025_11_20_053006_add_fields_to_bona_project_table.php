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
    Schema::table('bona_project', function (Blueprint $table) {
        $table->text('short_description')->nullable();
        $table->text('long_description')->nullable();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bona_project', function (Blueprint $table) {
            //
        });
    }
};
