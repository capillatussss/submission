<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Submission>
 */
class SubmissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=> User::factory(),
            'status_id'=>Status::factory(),
            'type'=>fake()->randomElement('Leave','Permit', 'Sick'),
            'attachment'=>'attatchment/'. Str::random(40).'.jpg',

            //
        ];
    }
}
