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

        Schema::create('translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('language_id');
            $table->morphs('translatable');
            $table->string('attribute');
            $table->text('value');
            $table->timestamps();
            $table->foreign('language_id')->references('id')->on('languages');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translations');
    }
};

