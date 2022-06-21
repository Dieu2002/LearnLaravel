<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $faker->text,
            'user_id' => factory(App\User::class),
            'slug' => $faker->slug,
            'keywords' => $faker->text,
            'description' => $faker->text,
            'content' => $faker->paragraph,
        ];
    }
}
