<?php

namespace Database\Factories;

use App\Models\Mission;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genders = ["Elder", "Sister"];
        $selectedGender = fake()->randomElement($genders);
        $user = User::factory()->create();
        $mission = Mission::factory()->create();
        return [
            'user_id' => $user->id,
            'mission_id' => $mission->id,
            'profile_photo' => fake()->image(),
            'bio' => fake()->sentence(),
            'missionary_gender' => $selectedGender,
            'tagName' => (string)$selectedGender." ".$user->last_name
        ];
    }
}
