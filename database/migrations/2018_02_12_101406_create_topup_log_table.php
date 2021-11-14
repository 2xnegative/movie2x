<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopupLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tmpay_status');
            $table->text('tmpay_trans_id')->nullable();
            $table->string('tmpay_tmp_pass')->nullable();
            $table->integer('tmpay_id_user')->default(0);
            $table->text('tmpay_ip')->nullable();
            $table->text('tmpay_username')->nullable();
            $table->string('tmpay_price')->nullable();
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
        Schema::dropIfExists('log');
    }
}
