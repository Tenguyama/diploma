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
        Schema::create('tag_subgroup_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tag_subgroup_id')->constrained()->cascadeOnDelete();
            $table->string('locale', 2)->index();
            //
            $table->string('name', 64)->unique();
            $table->string('description', 278);
            //
            $table->unique(['tag_subgroup_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_subgroup_translations');
    }
};
