<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\MetaTag;
use App\Models\User;

class MetaTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MetaTag::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $user = User::factory()->create();

        return [
            'path' => '/' . $this->faker->unique()->slug(),

            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(2),
            'keywords' => implode(', ', $this->faker->words(5)),

            'created_by' => $user->id,
            'updated_by' => $user->id,

            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
