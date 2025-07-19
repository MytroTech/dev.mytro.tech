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
        Schema::disableForeignKeyConstraints();

        Schema::create('pages', static function (Blueprint $table) {
            $table->id();
            $table->json('title'); // e.g. { "en": "Handling", "uk": "Обробка" }
            $table->string('slug')->unique(); // URL identifier
            $table->json('excerpt')->nullable(); // Short description (per lang)
            $table->longText('content')->nullable(); // Full page content
            $table->string('svg_icon')->nullable(); // e.g. 'fles'
            $table->string('css_class')->nullable(); // e.g. 'fles_ill'
            $table->json('gallery')->nullable(); // e.g. ["img1.jpg", "img2.jpg"]
            $table->string('view_template')->default('default');
            $table->integer('position')->default(0);
            $table->boolean('is_active')->default(true);
            $table->foreignId('created_by')->constrained('users', 'id');
            $table->foreignId('updated_by')->constrained('users', 'id');
            $table->timestamp('published_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('pages');
        Schema::enableForeignKeyConstraints();
    }
};
