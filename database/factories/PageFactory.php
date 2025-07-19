<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Page;
use App\Models\User;

class PageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Page::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $user = User::factory()->create();

        return [
            'title' => fake()->sentence(4),
            'slug' => fake()->slug(),
            'position' => fake()->numberBetween(0, 100),
            'excerpt' => fake()->text(100),
            'content' => fake()->paragraphs(3, true),
            'published_at' => fake()->dateTimeBetween('-1 month', '+1 month'),
            'created_by' => $user->id,
            'updated_by' => $user->id,
        ];
    }
}
