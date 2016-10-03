<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ReplyCommentTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $commentId = App\Models\Comment::pluck('id')->toArray();
        $name = App\User::pluck('name')->toArray();
        for ($i = 0; $i < 10; $i++) {
            factory(App\Models\ReplyComment::class)->create([
                'comment_id' => $faker->randomElement($commentId),
                'name' => $faker->randomElement($name)
            ]);
        }
    }
}
