<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class PostFactory extends Factory
{
 /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Post::class;//モデル名をパスから指定

public function definition()
    {
    return [
        'title' => $this->faker->word,
        'body' => $this->faker->realText
    ];
}
}
