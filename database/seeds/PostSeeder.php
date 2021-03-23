<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ( $i=0; $i < 10; $i++) {
            $newPost = new Post();

            // $newPost->slug = $faker->slug();
            $newPost->title = $faker->unique()->sentence();
            $newPost->slug = Str::slug($newPost->title);
            $newPost->content = $faker->text();

            $newPost->save();
        }
    }
}