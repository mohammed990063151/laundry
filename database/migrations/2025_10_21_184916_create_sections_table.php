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
       Schema::create('sections', function (Blueprint $table) {
    $table->id();
    $table->string('title'); // العنوان
    $table->text('description'); // الوصف
    $table->string('button_text')->nullable(); // نص الزر
    $table->string('image')->nullable(); // رابط الصورة
    $table->integer('clients_count')->nullable(); // إحصائية العملاء
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
