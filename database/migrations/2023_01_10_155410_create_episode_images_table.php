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
        Schema::create('episode_images', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('episode_id')->constrained()->cascadeOnDelete();
            $table->string('path', 128)->unique();
            $table->integer('width');
            $table->integer('height');
            $table->json('colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episode_images');
    }
};
