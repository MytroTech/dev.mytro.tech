<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Vacancy;

class VacancyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacancy::class;

    public function definition(): array
    {
        $user = User::factory()->create();

        return [
            'slug' => $this->faker->unique()->slug(),
            'title' => $this->faker->jobTitle(),
            'excerpt' => $this->faker->optional()->sentence(12),
            'content' => $this->faker->paragraphs(3, true),
            'position' => $this->faker->numberBetween(0, 100),
            'created_by' => $user->id,
            'updated_by' => $user->id,
            'published_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
