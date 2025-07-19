<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Attachment;

class AttachmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attachment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'attachable_type' => fake()->word(),
            'attachable_id' => fake()->numberBetween(-10000, 10000),
            'name' => fake()->name(),
            'file' => fake()->word(),
            'mime_type' => fake()->regexify('[A-Za-z0-9]{100}'),
            'size' => fake()->numberBetween(-10000, 10000),
            'position' => fake()->numberBetween(-10000, 10000),
        ];
    }
}
