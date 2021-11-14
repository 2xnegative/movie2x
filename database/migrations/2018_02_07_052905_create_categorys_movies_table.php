<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorysMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorys_movies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('movie_id')->unsigned()->default(1);
            $table->foreign('movie_id')
                    ->references('id')->on('movies')
                    ->onDelete('cascade');
            $table->integer('category_id')->unsigend()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorys_movies');
    }
}
