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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // perbaikan 'user' jadi 'users'
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('photo_url')->nullable();
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('set null'); // perbaikan urutan nullable()
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
