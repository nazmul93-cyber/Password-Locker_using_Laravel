<?php

namespace Database\Factories;

use App\Models\Passlock;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\Faker\Generator ;


class PasslockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Passlock::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $dd= random_int(1,100);
        $htt = "https://$dd lkdsfl.com";

        return [
            'website' => $this->$htt,
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
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
