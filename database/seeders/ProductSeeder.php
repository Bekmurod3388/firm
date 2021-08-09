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
                'head_ru' => 'СЕТЕВОЕ ОБОРУДОВАНИЕ',
                'description_ru' => 'Решения по коммутации и маршрутизации от ведущих мировых производителей, включая беспроводные технологии и программное обеспечение.',
                'head_en' => 'NETWORK HARDWARE',
                'description_en' => 'Switching and routing solutions from the world\'s leading manufacturers, including wireless technologies and software.',
                'img'=>'',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'СЕРВЕРНОЕ ОБОРУДОВАНИЕ',
                'description_ru' => 'Гибкие, масштабируемые и эффективные решения для построения серверной инфраструктуры, которая обеспечит необходимую Вашей компании скорость реакции на требования бизнеса.',
                'head_en' => 'SERVER EQUIPMENT',
                'description_en' => 'Flexible, scalable and efficient solutions for building a server infrastructure that will provide the speed your company needs to respond to business requirements.',
                'img'=>'',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'СИСТЕМЫ ХРАНЕНИЯ ДАННЫХ',
                'description_ru' => 'Комплекс аппаратных и программных средств, который предназначен для хранения и оперативной обработки информации любого объема.',
                'head_en' => 'STORAGE SYSTEMS',
                'description_en' => 'A complex of hardware and software, which is designed for storage and operational processing of information of any volume.',
                'img'=>'',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'БЕСПРОВОДНОЕ ОБОРУДОВАНИЕ',
                'description_ru' => 'Комплексные решения для обеспечения современной защиты предприятий от известных и неизвестных угроз.',
                'head_en' => 'WIRELESS EQUIPMENT',
                'description_en' => 'Comprehensive solutions to provide modern enterprise protection against known and unknown threats.',
                'img'=>'',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'ВИДЕО-КОНФЕРЕНЦ-СВЯЗЬ',
                'description_ru' => 'Решения для одновременной передачи видео и звука на расстоянии с помощью аппаратно-программных средств коммуникации.',
                'head_en' => 'VIDEO-CONFERENCE-COMMUNICATION',
                'description_en' => 'Solutions for the simultaneous transmission of video and sound at a distance using hardware and software communications.',
                'img'=>'',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'СИСТЕМЫ ВИДЕОНАБЛЮДЕНИЯ',
                'description_ru' => 'Обеспечение безопасности предприятий и организаций, включая решения по видеоаналитике и управлению системами видеонаблюдения.',
                'head_en' => 'VIDEO SURVEILLANCE SYSTEMS',
                'description_en' => 'Ensuring the security of enterprises and organizations, including solutions for video analytics and video surveillance systems management.',
                'img'=>'',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'ВИЗУАЛИЗАЦИЯ',
                'description_ru' => 'Решения средств отображения информации для заказчиков и розничных потребителей (Digital Signage).',
                'head_en' => 'VISUALIZATION',
                'description_en' => 'Solutions for displaying information for customers and retail consumers (Digital Signage).',
                'img'=>'',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'ВИРТУАЛИЗАЦИЯ',
                'description_ru' => 'Решения для эффективного сокращения расходов на поддержку ИТ-инфраструктуры.',
                'head_en' => 'VIRTUALIZATION',
                'description_en' => 'Solutions to effectively reduce IT infrastructure support costs.',
                'img'=>'',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'СИСТЕМЫ ЭЛЕКТРОСНАБЖЕНИЯ',
                'description_ru' => 'Активное и пассивное оборудование для ЦОДов, включая решения по источникам бесперебойного питания, дизель генераторов и прецизионному кондиционированию.',
                'head_en' => 'POWER SUPPLY SYSTEMS',
                'description_en' => 'Active and passive equipment for data centers, including solutions for uninterruptible power supplies, diesel generators and precision air conditioning.',
                'img'=>'',
                'category_id'=>'1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'ФОТО И ВИДЕО ТЕХНИКА',
                'description_ru' => 'Безусловно, глубокий уровень погружения позволяет выполнить важные задания по разработке направлений.',
                'head_en' => 'PHOTO AND VIDEO EQUIPMENT',
                'description_en' => 'Of course, a deep level of immersion allows you to complete important assignments for developing directions.',
                'img'=>'',
                'category_id'=>'2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'АКСЕССУАРЫ',
                'description_ru' => 'Безусловно, глубокий уровень погружения позволяет выполнить важные задания по разработке направлений.',
                'head_en' => 'ACCESSORIES',
                'description_en' => 'Of course, a deep level of immersion allows you to complete important assignments for developing directions.',
                'img'=>'',
                'category_id'=>'2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'БЫТОВАЯ ТЕХНИКА АККУМУЛЯТОРЫ',
                'description_ru' => 'Безусловно, глубокий уровень погружения позволяет выполнить важные задания по разработке направлений.',
                'head_en' => 'HOUSEHOLD APPLIANCES BATTERIES',
                'description_en' => 'Of course, a deep level of immersion allows you to complete important assignments for developing directions.',
                'img'=>'',
                'category_id'=>'2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'КОМПЬЮТЕРНАЯ ТЕХНИКА',
                'description_ru' => 'Безусловно, глубокий уровень погружения позволяет выполнить важные задания по разработке направлений.',
                'head_en' => 'COMPUTER TECHNOLOGY',
                'description_en' => 'Of course, a deep level of immersion allows you to complete important assignments for developing directions.',
                'img'=>'',
                'category_id'=>'2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'ВИДЕО-ПАНЕЛИ',
                'description_ru' => 'Безусловно, глубокий уровень погружения позволяет выполнить важные задания по разработке направлений.',
                'head_en' => 'VIDEO PANELS',
                'description_en' => 'Of course, a deep level of immersion allows you to complete important assignments for developing directions.',
                'img'=>'',
                'category_id'=>'2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'АУДИОТЕХНИКА И НАУШНИКИ',
                'description_ru' => 'Безусловно, глубокий уровень погружения позволяет выполнить важные задания по разработке направлений.',
                'head_en' => 'AUDIO EQUIPMENT AND HEADPHONES',
                'description_en' => 'Of course, a deep level of immersion allows you to complete important assignments for developing directions.',
                'img'=>'',
                'category_id'=>'2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'ТЕЛЕФОНЫ',
                'description_ru' => 'Безусловно, глубокий уровень погружения позволяет выполнить важные задания по разработке направлений.',
                'head_en' => 'PHONES',
                'description_en' => 'Of course, a deep level of immersion allows you to complete important assignments for developing directions.',
                'img'=>'',
                'category_id'=>'3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'head_ru' => 'АКСЕССУАРЫ',
                'description_ru' => 'Безусловно, глубокий уровень погружения позволяет выполнить важные задания по разработке направлений.',
                'head_en' => 'ACCESSORIES',
                'description_en' => 'Of course, a deep level of immersion allows you to complete important assignments for developing directions.',
                'img'=>'',
                'category_id'=>'3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
