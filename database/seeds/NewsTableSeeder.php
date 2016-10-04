<?php
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\User;
use App\Models\News;
use Faker\Factory as Faker;

class NewsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $categoryId = Category::pluck('id')->toArray();
        for ($i = 0; $i < 10; $i++) {
            factory(News::class)->create([
                'cate_id' => $faker->randomElement($categoryId),
            ]);
        }
    }
}
