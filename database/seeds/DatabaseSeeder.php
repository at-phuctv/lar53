<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $table = ['t_news', 't_category', 'comment', 't_reply_comments'];
        foreach ($table as $value) {
            DB::table($value)->truncate();
        }
        $this->call(UsersTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(ReplyCommentTableSeeder::class);
        $this->call(AdminUserTableSeeder::class);
    }
}
