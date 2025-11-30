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
        $min = 100000;
        $max = 200000;
        $salary = number_format(random_int($min, $max), 0, ".", ",");

        return [
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::inRandomOrder()->first()->id,
            'salary' => "$".$salary,
        ];
    }
}
