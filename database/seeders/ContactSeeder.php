<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::query()->create([
            'address' => 'Ташкент, Фаргона йули, 15',
            'phone' => '+998 (78) 148 53 00',
            'email' => 'info@ca-dc.uz'
        ]);
    }
}
