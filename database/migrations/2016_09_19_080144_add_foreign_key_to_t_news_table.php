<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToTNewsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_news', function (Blueprint $table) {
            $table->foreign('cate_id', 't_news_ibfk1')
                ->references('id')
                ->on('t_category')
                ->onDelete('RESTRICT');
             $table->foreign('user_id', 't_news_ibfk2')
                ->references('id')
                ->on('users')
                ->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_news', function (Blueprint $table) {
            $table->dropForeign('t_news_ibfk1');
            $table->dropForeign('t_news_ibfk2');
        });
    }
}
