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
        Schema::create('providers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            //$table->foreignUuid('anime_id')->constrained()->cascadeOnDelete(); Перенести до Б:Б provider_anime + extra field (url)
            $table->string('logo_path', 128);
            $table->string('name', 156);
            $table->integer('priority')->unique(); // чим популярніший сервіс, тим више пріоритет
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('providers');
    }
};
