<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comment', function (Blueprint $table) {
            $table->date('date_comment');
             $table->integer('user_id')->unsigned();
             $table->foreign('user_id','fk_u_c')->references('id')->on('users')->onDelete('RESTRICT');
            //$table->renameColumn('t_new_id', 'news_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comment', function (Blueprint $table) {
            $table->dropForeign('fk_u_c');
           $table->dropColumn('date_comment');
        });
    }
}
