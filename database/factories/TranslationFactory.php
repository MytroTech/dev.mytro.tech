<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Language;
use App\Models\Translation;

class TranslationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Translation::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'language_id' => Language::factory(),
            'translatable_type' => fake()->word(),
            'translatable_id' => fake()->numberBetween(-10000, 10000),
            'attribute' => fake()->word(),
            'value' => fake()->text(),
        ];
    }
}
