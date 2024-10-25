<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images = ['pic1.jpg' , 'pic2.jpg' , 'pic3.png'];
        return [
           'description'=>fake()->sentence(),
            'slung'=>fake()->regexify('[a-z0-9]{10}'),//random chars and numbers
            'user_id'=>User::factory(),
            'image'=> 'posts/' . fake()->randomElement($images)
        ];
    }

}
