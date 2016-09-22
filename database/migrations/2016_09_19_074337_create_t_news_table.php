<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cate_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->text('introduce');
            $table->longText('content');
            $table->string('image');
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
        Schema::drop('t_news');
    }
}
