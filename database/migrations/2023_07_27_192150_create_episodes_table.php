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
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->string('slug')->unique()->index();
            $table->text('excerpt');
            $table->integer('episode_number')->unique();
            $table->string('youtube_id');
            $table->string('megaphone_id');
            $table->string('thumbnail');
            $table->boolean('is_premium')->default(false);
            $table->string('author'); // will be realtionships soon
            $table->timestamp('published_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('episodes');
    }
};
