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
                ->onDelete('CASCADE');
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
        });
    }
}
