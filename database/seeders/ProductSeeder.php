<?php

namespace Database\Seeders;

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
        $products = [
            [
                'name' => 'Honda',
                'price' => '23',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
                'contact_phone' => '12345'
            ],
            [
                'name' => 'Fiat',
                'price' => '34',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
                'contact_phone' => '12345'
            ],
            [
                'name' => 'Volvo',
                'price' => '23',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
                'contact_phone' => '12345'
            ],
            [
                'name' => 'Bar',
                'price' => '34',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
                'contact_phone' => '12345'
            ],
        ];

    }
}
