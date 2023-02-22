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
        Schema::create('similars', function (Blueprint $table) {
            $table->foreignUuid('anime_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('anime_similar_id')->constrained('animes', 'id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('similars');
    }
};
