<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\News;
use App\User;
use Faker\Factory as Faker;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

public function run()
    {
        $faker = Faker::create();
        $newid = News::pluck('id')->toArray();
        $name = User::pluck('name')->toArray();
        for ($i = 0; $i < 5; $i++) {
            factory(Comment::class)->create([
                'news_id' => $faker->randomElement($newid),
                'author' => $faker->randomElement($name),
            ]);
        }
    }
}
