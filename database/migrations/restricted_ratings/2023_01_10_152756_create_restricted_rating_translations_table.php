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
        Schema::create('restricted_ratings_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('restricted_rating_id')->constrained()->cascadeOnDelete();
            $table->string('locale', 2)->index();
            //
            $table->string('name', 10);
            $table->string('hint', 64);
            $table->foreignUuid('seo_addition_id')->constrained()->cascadeOnDelete();
            //
            $table->unique(['restricted_rating_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restricted_ratings_translations');
    }
};
