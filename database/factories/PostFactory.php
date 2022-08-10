<?php

namespace Database\Factories;

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
            'description' => $this->faker->text(50),
            'img_url' => $this -> faker -> randomElement([
                'https://e7.pngegg.com/pngimages/978/397/png-clipart-adelie-penguin-bird-antarctica-emperor-penguin-penguin-animals-animal-thumbnail.png',
            ]),
            'user_id' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]),
            
        ];
    }
}
