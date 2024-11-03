<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'title' => fake()->jobTitle(),
          'salary'=> fake()->randomElement(['$500,00 USD', '$90,000,USD','$150,000']),
          'location'=>'Remote',
          'type'=> 'Full Time',
          'url'=>fake()->url,
          'featured'=> false,
          'employer_id'=>Employer::factory()
        ];
    }
}
