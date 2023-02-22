<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_videoplayers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('videoplayer_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('episode_language_id')->constrained()->cascadeOnDelete();
            $table->foreignId('format_id')->constrained()->cascadeOnDelete();
            $table->string('url', 2048);
            $table->integer('start_intro')->nullable();
            $table->integer('end_intro')->nullable();
            $table->integer('start_ending')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language_videoplayers');
    }
};
