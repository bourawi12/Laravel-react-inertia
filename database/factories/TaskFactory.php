<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Artisan;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->sentence(),
           'description'=>fake()->realText(),
           'due_date'=>fake()->dateTimeBetween('now','+1year'),
           'status'=>fake()
                ->randomElement(['pending','in_progress','completed']),
           'priority'=>fake()
                ->randomElement(['low','meduim','High']),
           'image_path'=>fake()->imageUrl(),
           'assigned_user_id'=>1,
           'created_by'=>1,
           'updated_by'=>1,
           'created_at' => time(),
            'updated_at' => time()
        ];
    }
}
