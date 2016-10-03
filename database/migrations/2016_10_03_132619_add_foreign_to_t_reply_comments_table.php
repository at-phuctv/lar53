<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToTReplyCommentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_reply_comments', function (Blueprint $table) {
            $table->foreign('comment_id', 't_reply_comments_ibfk1')
                ->references('id')
                ->on('comment')
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
        Schema::table('t_reply_comments', function (Blueprint $table) {
            $table->dropForeign('t_reply_comments_ibfk1');
        });
    }
}
