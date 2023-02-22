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
        Schema::create('anime_videos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('anime_video_kind_id')->constrained()->cascadeOnDelete(); //?
            $table->string('name', 100);
            $table->string('url', 2048);
            $table->string('image_url', 2048);
            $table->string('embed_url', 2048);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anime_videos');
    }
};
