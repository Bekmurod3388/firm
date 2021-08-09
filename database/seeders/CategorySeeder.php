<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::query()->create([
            [
                'name' => 'Solution division',
            ],
            [
                'name'=>'Volume division',
            ],
            [
                'name'=>'Mobile division',
            ]
        ]);
    }
}
