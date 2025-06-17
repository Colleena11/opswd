<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Municipality;

class MunicipalitiesFactory extends Factory
{
    public function definition(): array
    {
        $municipality = Municipality::inRandomOrder()->first();
        return [
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->optional()->firstName,
            'last_name' => $this->faker->lastName,
            'sex' => $this->faker->randomElement(['male', 'female']),
            'age' => $this->faker->numberBetween(18, 90),
            'address' => $this->faker->address,
            'contact_number' => $this->faker->phoneNumber,
            'municipality_id' => $municipality ? $municipality->id : 1, // fallback to 1
            'valid_id' => $this->faker->uuid,
        ];
    }
}