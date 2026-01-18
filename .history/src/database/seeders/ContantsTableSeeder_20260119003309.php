<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Contant;

class ContantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryId = Category::first()->id;

        $param = [
            'first_name' => '山田',
            'last_name' => '太郎',
            'category_id' => $categoryId,
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'detail' => '届いた商品が注文した商品ではありませんでした。商品の交換をお願いします。',
            ];
            DB::table('contacts')->insert($param);

        Contact::factory()->count(35)->create();
    }
}
