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

        Schema::create('attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->morphs('attachable'); // создаёт attachable_type + attachable_id
            $table->string('name')->nullable();
            $table->string('file');
            $table->string('mime_type', 100)->nullable();
            $table->integer('size')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attachments');
    }
};
