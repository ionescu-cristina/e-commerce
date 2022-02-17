<?php

namespace Database\Seeders;

use DateTime;
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
                'units' => '3',
                'image' => 'https://picsum.photos/200',
                'created_at' => new DateTime(),
                'update_at' => null,
            ],
            [
                'name' => 'Honda',
                'price' => '23232',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
                'units' => '65',
                'image' => 'https://picsum.photos/200',
                'created_at' => new DateTime(),
                'update_at' => null,
            ],
            [
                'name' => 'Honda',
                'price' => '67676',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
                'units' => '31',
                'image' => 'https://picsum.photos/200',
                'created_at' => new DateTime(),
                'update_at' => null,
            ],
            [
                'name' => 'Honda',
                'price' => '3445',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
                'units' => '7',
                'image' => 'https://picsum.photos/200',
                'created_at' => new DateTime(),
                'update_at' => null,
            ],
        ];

    }
}
