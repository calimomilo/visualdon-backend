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
        Schema::create('composers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('epoch', ['medieval', 'renaissance', 'baroque', 'classical', 'early_romantic', 'romantic', 'late_romantic', '20th_century', 'post-war', '21st_century']);
            $table->string('portrait_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('composers');
    }
};
