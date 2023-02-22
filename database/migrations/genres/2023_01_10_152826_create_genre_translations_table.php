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
        Schema::create('genre_translations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('genre_id')->constrained()->cascadeOnDelete();
            $table->string('locale', 2)->index();
            //
            $table->string('name', 64);
            $table->string('description', 278);
            $table->foreignUuid('seo_addition_id')->constrained()->cascadeOnDelete();
            //
            $table->unique(['genre_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genre_translations');
    }
};
