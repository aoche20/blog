<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition()
    {
        return [
            'title'=>$this->faker->word(),
            'into_text'=> $this->faker->sentence(2, true),
            'full_text'=> $this->faker->sentence(40, true),
            'image'=> $this->faker->imageUrl(250,300),
            'user_id'=> User::all()->random()->id,
            'category_id'=> Category::all()->random()->id,
        ];
    }
}
