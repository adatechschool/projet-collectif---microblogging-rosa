<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Media;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'email_verified_at' => now(),
            'description' => fake()->text(50),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'biography' => "This is my bio",
            'img_url' => $this->faker->randomElement([
                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmVyfk3NugPeEOtNOwnIpCPNPcubZc-zodmF62RbwIxymnY-3CViXg9JCmMhLUu3y9LAQ&usqp=CAU',
                'https://www.picclickimg.com/d/l400/pict/164975263677_/2-x-10cm-Funny-Pigeon-Vinyl-Stickers.jpg',
                'https://i.pinimg.com/originals/5c/d1/ae/5cd1ae18596c796d9500aba14432a2fe.jpg',
                'https://e7.pngegg.com/pngimages/808/872/png-clipart-chicken-bird-english-carrier-pigeon-homing-pigeon-rooster-chicken-animals-chicken.png',
                'https://i.pinimg.com/236x/ca/3d/37/ca3d37d5eace8551a508896f65cda266.jpg',
                'https://ih1.redbubble.net/image.450886651.0130/aps,504x498,small,transparent-pad,600x600,f8f8f8.u8.jpg',
                'https://i.pinimg.com/736x/b4/2e/0f/b42e0f87301bdd007ab00794f6c93018.jpg',
                'https://i.skyrock.net/0790/92470790/pics/3289512294_1_4_Nq4RNjh0.png',
                'https://i.pinimg.com/236x/a9/55/05/a95505b84badf896efb061aa37556866.jpg',
                'https://ih1.redbubble.net/image.1729872298.3901/aps,504x498,small,transparent-pad,600x600,f8f8f8.jpg',
                'https://criticalmas.org/wp-content/uploads/2021/12/potato-happy700.jpg',
                'https://cdn.drawception.com/images/avatars/579030-AE7.jpg'
            ]),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
