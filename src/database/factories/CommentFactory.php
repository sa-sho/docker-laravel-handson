<?php


namespace Database\Factories;


use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class CommentFactory extends Factory
{
 /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Comment::class;//モデル名をパスから指定

public function definition()
    {
     return [
        'body' => $this->faker->realText
    ];
}
}
