<?php

use app\models\Post;

class PostCest
{
    private $postId;

    public function _before(FunctionalTester $I)
    {
        $faker = \Faker\Factory::create();
        $this->postId = $I->haveRecord(Post::class, [
            'title' => $faker->sentence(3),
            'short' => $faker->sentence(),
            'content' => $faker->paragraph()
        ]);

        $I->amOnPage(['post/index', 'id' => $this->postId]);
    }

    // tests
    public function canSeeThePost(FunctionalTester $I)
    {
        $post = Post::findOne($this->postId);
        $I->canSee($post->title);
    }
}
