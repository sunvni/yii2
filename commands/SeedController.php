<?php

namespace app\commands;

use app\models\Post;
use yii\console\Controller;

class SeedController extends Controller
{
    public function actionPosts()
    {
        $faker = \Faker\Factory::create();
        $post = new Post();

        $post->title = $faker->sentence();
        $post->short = $faker->words(5, true);
        $post->content = $faker->paragraphs(2, true);

        $post->save();
    }
}
