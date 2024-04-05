<?php

namespace Database\Seeders;

use App\Models\BankInfo;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PublishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'firstname' => 'amir',
                'lastname' => 'qaderi',
                'email' => 'amir@email.com',
                'password' => Hash::make('12345678'),
            ]
        ]);


        BankInfo::create([
            'user_id' => 1,
            'card_number' => '6219861906974281',
            'bank_name' => 'سامان',
        ]);

        Product::factory(5)->create();
    }
}
