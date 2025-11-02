<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('service_features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pagservice_id')->constrained('pagservices')->onDelete('cascade');
            $table->string('icon')->nullable(); // أيقونة FontAwesome
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('service_features');
    }
};
