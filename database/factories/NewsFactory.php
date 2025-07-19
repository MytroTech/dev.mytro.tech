<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\News;
use App\Models\User;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('ru_RU');
        return [
            'title' => $faker->sentence(),
            'slug' => $faker->slug(),

            'thumbnail' => 'https://placehold.co/150x150?text=' . $faker->word(),

            'excerpt' => $faker->sentence(10),
            'content' => $faker->paragraphs(3, true),

            'created_by' => User::factory(),
            'updated_by' => User::factory(),

            'published_at' => $faker->dateTime(),

            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
