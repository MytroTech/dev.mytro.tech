<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Random\RandomException;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    /**
     * @throws RandomException
     */
    public function definition(): array
    {
        $gallery = collect(range(1, random_int(2, 5)))->map(function () {
            return 'https://source.unsplash.com/640x480/?nature,water&' . mt_rand();
        })->toArray();

        ray($gallery);

        return [
            'title'         => $this->faker->word(),
            'slug'          => $this->faker->slug(),
            'excerpt'       => $this->faker->word(),
            'description'   => $this->faker->text(),
            'view_template' => $this->faker->word(),
            'image'         => $this->faker->word(),
            'gallery'       => $gallery,
            'sort_order'    => $this->faker->randomNumber(),
            'is_active'     => $this->faker->boolean(),
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
        ];
    }
}
