<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use Nette\Utils\Random;
use Illuminate\Support\Str;

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
    public function definition()
    {
        return [
           'title'=>fake()->lexify('????????????????????????????????'),
           'description'=>fake()->paragraph(),
           'user_id'=>'4'
        ];
    }
}
