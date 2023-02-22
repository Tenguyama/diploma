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
        Schema::create('anime_translations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('anime_id')->constrained()->cascadeOnDelete();
            $table->string('locale', 2)->index();
            //
            $table->string('name', 156);
            $table->text('description');
            $table->string('poster_path', 128);
            $table->json('poster_colors');
            $table->foreignUuid('seo_addition_id')->constrained()->cascadeOnDelete();
            //
            $table->unique(['anime_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anime_translations');
    }
};
