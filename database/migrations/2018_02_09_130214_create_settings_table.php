<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->text('domain');
            $table->text('title');
            $table->text('description');
            $table->text('keyword');
            $table->integer('comment_fb')->default(1);
            $table->text('logo');
            $table->text('facebook');
            $table->text('twitter');
            $table->text('howto');
            $table->integer('imdb')->default('1');
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
        Schema::dropIfExists('settings');
    }
}
