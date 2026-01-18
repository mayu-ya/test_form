<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['男', '女', 'その他']),
            'email' => $this->faker->safeEmail(),
            'tel' => $this->faker->phoneNumber(),
            'address' => $this->faker->prefecture() . city() . streeAddress(),
            'building' => $this->faker-secondaryAddress()>,
            'detail' => $this->faker->text(30)
        ];
    }
}
