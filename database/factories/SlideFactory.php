<?php

namespace Database\Factories;

use App\Models\Slide;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SlideFactory extends Factory
{
    protected $model = Slide::class;

    public function definition(): array
    {
        return [
            'sort_order' => $this->faker->randomNumber(),
            'title'      => $this->faker->word(),
            'content'    => $this->faker->word(),
            'video_path' => $this->faker->word(),
            'color'      => $this->faker->word(),
            'is_active'  => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
