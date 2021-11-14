<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tvs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('url');
            $table->text('url_text');
            $table->text('url2');
            $table->text('url3_text');
            $table->text('url3');
            $table->text('url3_text');
            $table->text('url4');
            $table->text('url4_text');
            $table->string('category', 10);
            $table->string('top_channel', 10);
            $table->string('image', 200);
            $table->string('status', 10);
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
        Schema::dropIfExists('tvs');
    }
}
