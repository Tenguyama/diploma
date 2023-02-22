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
        Schema::create('seo_additions', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('slug', 71)->unique();
            $table->string('title', 128);
            $table->string('description', 278);
            $table->string('image', 128);
            $table->string('image_alt', 256);
            $table->string('social_title', 128);
            $table->string('social_description', 278);
            $table->string('social_type', 64);
            $table->string('social_image', 128);
            $table->string('social_image_alt', 256);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seo_additions');
    }
};
