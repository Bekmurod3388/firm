<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('products')->insert([
            [
                'head_ru' => 'Cистемы хранения данных',
                'description_ru' => 'Cистемы хранения данных
Комплекс аппаратных и программных средств, который предназначен для хранения и оперативной обработки информации любого объема.

Система хранения данных — представляет собой архитектурное решение для подключения внешних устройств хранения данных, таких как дисковые массивы, ленточные библиотеки, оптические приводы к серверам таким образом, чтобы операционная система распознала подключённые ресурсы как локальные.
',
                'head_en' => 'NETWORK HARDWARE',
                'description_en' => 'Network (telecommunication) equipment - devices necessary for the operation of a computer network, for example: a router, switch, hub, patch panel, etc. Active and passive network equipment can be distinguished.',
                'img'=>'network_hardware.svg',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

        ]);
    }
}
