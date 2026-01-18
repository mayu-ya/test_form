<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Contact::class;

    public function definition()
    {
        return [
            'category_id' => $this->{'商品の交換について'},
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement(['男', '女', 'その他']),
            'email' => $this->faker->safeEmail(),
            'tel' => $this->faker->phoneNumber(),
            'address' => $this->faker->prefecture() . $this->faker->city() . $this->faker->streetAddress(),
            'building' => $this->faker->secondaryAddress(),
            'detail' => $this->faker->text(30)
        ];
    }
}
