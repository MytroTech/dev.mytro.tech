<?php

namespace Database\Factories;

use App\Enums\SocialNetworkType;
use App\Models\SocialMedia;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SocialMediaFactory extends Factory
{
    protected $model = SocialMedia::class;

    public function definition(): array
    {
        return [
            'title'      => $this->faker->word(),
            'link'       => $this->faker->url(),
            'type'       => $this->faker->unique()->randomElement(SocialNetworkType::cases())->value,
            'is_active'  => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
