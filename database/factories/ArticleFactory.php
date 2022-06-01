<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

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
        $title = $this->faker->sentence(6, true);
        $slug =  Str::substr(Str::lower(preg_replace('/\s+/', '-', $title )), 0, -1);

        // "Hello wold hello wold hello wold."
        // "hello-wold-hello-wold-hello-wold"
        // https://laravel.com/docs/8.x/helpers


        return [
            'title' => $title,
            'body' => $this->faker->paragraph(100, true),
            'slug' => $slug,
            'img' => 'https://laravel.demiart.ru/wp-content/uploads/2022/01/laravel-9.png',
            'created_at' => $this->faker->dateTimeBetween('-1 years'),
            'published_at' => Carbon::now()
        ];
    }
}
