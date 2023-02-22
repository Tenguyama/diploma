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
        Schema::create('episode_translations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('episode_id')->constrained()->cascadeOnDelete();
            $table->string('locale', 2)->index();
            //
            $table->string('name', 156);
            $table->text('description');
            $table->foreignUuid('seo_addition_id')->constrained()->cascadeOnDelete();
            //
            $table->unique(['episode_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episode_translations');
    }
};
