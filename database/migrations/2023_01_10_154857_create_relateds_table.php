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
        Schema::create('relateds', function (Blueprint $table) {
            $table->foreignUuid('anime_id')->constrained()->cascadeOnDelete();
            $table->uuid('group_id');
            $table->foreignId('related_type_id')->constrained()->cascadeOnDelete();

            $table->primary(['anime_id', 'group_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relateds');
    }
};
