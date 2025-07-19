<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('services', static function (Blueprint $table) {
            $table->id();

            // Multilingual support
            $table->json('title'); // e.g. { "en": "Handling", "uk": "Обробка" }
            $table->string('slug')->unique(); // URL identifier

            // Text content
            $table->json('excerpt')->nullable(); // Short description (per lang)
            $table->longText('content')->nullable(); // Full page content

            // Visual customization
            $table->string('svg_icon')->nullable(); // e.g. 'fles'
            $table->string('css_class')->nullable(); // e.g. 'fles_ill'
            $table->enum('align', ['left', 'right'])->default('left'); // layout direction
            $table->json('gallery')->nullable(); // e.g. ["img1.jpg", "img2.jpg"]


            // Blade layout override
            $table->string('view_template')->default('default');

            // Visibility & sorting
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
