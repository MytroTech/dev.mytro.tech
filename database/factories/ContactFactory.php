<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Contact;
use App\Models\User;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $user = User::factory()->create();

        return [
            'title' => $this->faker->company(),
            'address' => $this->faker->address(),

            'phone' => $this->faker->phoneNumber(),
            'fax' => $this->faker->optional()->phoneNumber(),
            'email' => $this->faker->safeEmail(),

            'position' => $this->faker->numberBetween(0, 100),
            'is_active' => $this->faker->boolean(),

            'created_by' => $user->id,
            'updated_by' => $user->id,

            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
