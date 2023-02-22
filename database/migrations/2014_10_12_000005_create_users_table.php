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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('role_id')->constrained()->cascadeOnDelete();
            $table->string('login', 32)->unique();
            $table->string('email', 128)->unique();
            $table->string('name', 32)->nullable();
            $table->string('password', 32); // даміпароль????
            $table->string('avatar_path', 128)->nullable();
            $table->string('backdrop_path', 128)->nullable();
            // $table->decimal(
            //     'google_id',
            //     21,
            //     0
            // )->nullable(); //https://stackoverflow.com/questions/6872310/whats-the-best-column-type-for-google-user-id
            $table->integer('google_id')->nullable(); //?
            $table->integer('telegram_id')->nullable(); //?
            $table->integer('discord_id')->nullable(); //?
            $table->integer('tiktok_id')->nullable(); //?
            //token - data type???
            $table->foreignId('gender_id')->constrained()->cascadeOnDelete();
            $table->string('description', 70)->nullable();
            $table->string('telegram_url', 2048)->nullable();
            $table->string('discord_url', 2048)->nullable();
            $table->string('tiktok_url', 2048)->nullable(); // ?
            $table->unsignedBigInteger('xp');
            $table->string('status_icon', 2048)->default('ok'); //?
            $table->string('status_text', 50)->nullable(); //?
            //$table->rememberToken()->nullable()->default(); // ?
            //two_factor_recovery_codes ??
            //two_factor_secret ??
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
