<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubmitProject>
 */
class SubmitProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'group' => fake()->group(),
            'title' => fake()->title(),
            'members' => fake()->members(),
            'description' => fake()->description(),
            'ppt' => fake()->ppt(),
            'project' => fake()->project(),
        ];
    }
}
