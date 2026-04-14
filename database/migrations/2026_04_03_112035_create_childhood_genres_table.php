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
        Schema::create('childhood_genres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->enum('genre', ['blues', 'country', 'classical', 'drum&bass', 'edm', 'hip-hop', 'jazz', 'metal', 'pop', 'rap', 'reggae', 'r&b', 'rock', 'techno', 'world']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('childhood_genres');
    }
};
