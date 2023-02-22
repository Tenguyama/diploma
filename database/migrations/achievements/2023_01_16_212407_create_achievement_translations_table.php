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
        Schema::create('achievement_translations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('achievement_id')->constrained()->cascadeOnDelete();
            $table->char('locale', 2)->index();
            //
            $table->string('name', 156);
            $table->string('description', 278);
            //
            $table->unique(['achievement_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('achievement_translations');
    }
};
