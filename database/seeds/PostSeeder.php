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

            //TODO: Random user id (Must be changed)
            $user_id = Count(User::all()->toArray());
            $newPost->user_id = rand(1,$user_id);

            $newPost->title = $faker->sentence();
            $newPost->content = $faker->text();

            // Slug unique
            $slug = Str::slug($newPost->title);
            $princialSlug = $slug;

            $presentPost = Post::where('slug', $slug)->first();
            $counter = 1;
             
            while ($presentPost) {
                $slug = $princialSlug .'-' .$counter;
                $presentPost = Post::where('slug', $slug)->first();
                $counter++;
            }
            $newPost->slug = $slug;

            $newPost->save();
        }
    }
}