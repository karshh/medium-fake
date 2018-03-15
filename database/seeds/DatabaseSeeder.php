<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;
use App\Post;
use App\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	$faker = Factory::create();

	        $user = new User();
	        $user->name = $faker->name;
	        $user->email = $faker->unique()->email;
	        $user->password = 'hahaha';
	        $user->save();

	        for ($i=0; $i < rand(1,10); $i++) {
            $post = new Post();
            $post->title = $faker->sentence($nbWords = 4, $variableNbWords = true);;
			$post->img = $faker->imageUrl($width = 1000, $height = 400);
            $post->content = $faker->realText($maxNbChars = 1000, $indexSize = 2);
            $post->user_id = $user->id;
            $post->save();

            // $post->likes()->attach($user);
            // $user->post_likes()->attach($post);

            for ($j=0; $j<rand(1,10) ; $j++) {
                $comment = new Comment();
                $comment->user_id = $user->id;
                $comment->post_id = $post->id;
            	$comment->content = $faker->realText($maxNbChars = 200, $indexSize = 2);
                $comment->save();

            	// $comment->likes()->attach($user);
            	// $user->comment_likes()->attach($comment);
            }

            $comment = new Comment();
            $comment->name = $faker->name;
            $comment->email = $faker->unique()->email;
            $comment->title = $faker->sentence($nbWords = 4, $variableNbWords = true);;
            $comment->message = $faker->realText($maxNbChars = 600, $indexSize = 2);
        }
    }
}
