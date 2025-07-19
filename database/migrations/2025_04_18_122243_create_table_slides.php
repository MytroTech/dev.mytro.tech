<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('slides', static function (Blueprint $table) {
            $table->id();
            $table->integer('sort_order')->default(0);
            $table->json('title'); // multilingual title
            $table->text('content'); // multilingual content
            $table->string('video_path'); // Path to .MP4 (relatively /public)
            $table->string('color')->nullable(); // Color SVG (for example, #EF7B22)
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('slides');
    }
};
