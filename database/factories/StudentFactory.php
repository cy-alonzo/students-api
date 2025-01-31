<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => $this->faker->firstName(),
            'lastname'  => $this->faker->lastName(),
            'year'      => rand(1, 4),
            'course'    => array_rand([
                'BSCS'  => 'BSCS',
                'BSIT'  => 'BSIT',
                'HRT'   => 'HRT',
                'BSA'   => 'BSA'
            ]),
            'sex'       => array_rand(['MALE' => 'MALE', 'FEMALE' => 'FEMALE']),
            'address'   => $this->faker->address()
        ];
    }
}
