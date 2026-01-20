<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Category::class;
    
    public function definition()
    {
        return [
            $categories = ['商品のお届けについて', '商品の交換について', '商品トラブル', 'ショップへのお問い合わせ', 'その他']; 
            'content' => $this->faker->randomElement($categories),
        ];
    }
}
