<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_company_about_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('company_about', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();        // العنوان الكبير
            $table->string('subtitle')->nullable();     // سطر تعريفي مختصر
            $table->string('header_image')->nullable(); // صورة الهيدر
            $table->text('intro')->nullable();          // فقرة تعريفية
            $table->string('point1')->nullable();
            $table->string('point2')->nullable();
            $table->string('point3')->nullable();
            $table->string('point4')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('company_about');
    }
};
