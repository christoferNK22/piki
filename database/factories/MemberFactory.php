<?php

namespace Database\Factories;

use App\Models\Church;
use App\Models\Education;
use App\Models\Interest;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Type\Integer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $churchIds = Church::get()->pluck('id');
        $educationIds = Education::get()->pluck('id');
        $interestIds = Interest::get()->pluck('id');

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'bod' => $this->faker->date,
            'password' => 'password',
            'contact' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'year_in' => $this->faker->randomNumber(4),
            'church_id' => $this->faker->randomElement($churchIds),
            'interest_id' => $this->faker->randomElement($interestIds),
            'education_id' => $this->faker->randomElement($educationIds),
            'is_verified' => $this->faker->boolean,
        ];
    }
}
