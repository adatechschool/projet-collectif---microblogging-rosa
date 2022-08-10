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
            'img_url' => $this->faker->randomElement([
                'https://e7.pngegg.com/pngimages/978/397/png-clipart-adelie-penguin-bird-antarctica-emperor-penguin-penguin-animals-animal-thumbnail.png',
                'https://static.vecteezy.com/system/resources/previews/003/235/615/original/pigeon-flat-color-clip-art-design-free-vector.jpg',
                'https://files.oyebesmartest.com/uploads/preview/-11566323614zktaahgsrv.png',
                'https://www.seekpng.com/png/detail/1006-10064342_homing-pigeon-columbidae-bird-clip-art-pigeon-vector.png',
                'https://i.pinimg.com/originals/30/6f/4c/306f4c71081740e08f6ffc8c97000ef4.jpg',
                'https://st4.depositphotos.com/1041725/25257/v/600/depositphotos_252570546-stock-illustration-color.jpg',
                'https://pbs.twimg.com/media/Etu7lnzXYAEoCXr?format=jpg&name=large'
            ]),
            'user_id' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]),

        ];
    }
}
