<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::query()->create([
            [
                'head_ru' => '',
                'description_ru' => '',
                'head_en' => '',
                'description_en' => '',
                'img'=>'',
                'category_id'=>'',
            ],
            [
                'head_ru' => '',
                'description_ru' => '',
                'head_en' => '',
                'description_en' => '',
                'img'=>'',
                'category_id'=>'',
            ]
        ]);
    }
}
