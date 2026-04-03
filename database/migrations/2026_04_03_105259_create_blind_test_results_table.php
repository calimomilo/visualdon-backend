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
        Schema::create('blind_test_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('title_id')->constrained('titles')->onDelete('cascade');
            $table->enum('result', ['unknown', 'known', 'bt-false', 'bt-composer', 'bt-title', 'bt-both']);
            $table->timestamps();

            $table->unique(['user_id', 'title_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blind_test_results');
    }
};
