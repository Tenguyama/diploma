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
        Schema::create('dub_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dub_id')->constrained()->cascadeOnDelete();
            $table->string('locale', 2)->index();
            //
            $table->string('description', 278);
            $table->foreignUuid('seo_addition_id')->constrained()->cascadeOnDelete();
            //
            $table->unique(['dub_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dub_translations');
    }
};
