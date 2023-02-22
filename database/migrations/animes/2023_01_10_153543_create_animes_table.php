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
        Schema::create('animes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('tmdb_id', 32); // бо якщо починається з 0 то інт його забере тіпа
            $table->string('shikimori_id', 32);
            $table->string('image_name', 157)->nullable();
            $table->string('native_name', 157);
            $table->string('romaji_name', 157);//->nullable();
            $table->foreignId('kind_id')->constrained()->cascadeOnDelete();
            $table->foreignId('status_id')->constrained()->cascadeOnDelete();
            $table->foreignId('period_id')->constrained()->cascadeOnDelete();
            $table->foreignId('restricted_rating_id')->constrained()->cascadeOnDelete();
            $table->integer('avg_duration'); // обично в хв, тіп 25 і дописуєм на фронті хв\м і тд
            $table->integer('episodes')->nullable(); // тіп проточних ??
            $table->date('first_air_date');
            $table->date('last_air_date');
            $table->foreignId('source_id')->constrained()->cascadeOnDelete();
            $table->float('shikimori_score')->nullable(); //
            $table->float('tmdb_score ')->nullable(
            );     // ну бо могло не вийти серій і тіпа як його оцінити не дививши хз
            $table->float('imdb_score ')->nullable();     //
            $table->boolean('is_published')->default(false);
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
        Schema::dropIfExists('animes');
    }
};
