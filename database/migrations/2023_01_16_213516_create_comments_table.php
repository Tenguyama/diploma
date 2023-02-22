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
        Schema::create('comments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('commentable_id');
            $table->string('commentable_type', 128);
            $table->foreignUuid('user_id')->constrained()->cascadeOnDelete();
            $table->string('locale', 2);
            $table->string('body', 1000);
            $table->foreignUuid('parent_id')->constrained('comments', 'id');
            $table->boolean('is_spoiler')->default(false);
            $table->timestamps();
            $table->softDeletes();

            $table->index(['commentable_id', 'commentable_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
