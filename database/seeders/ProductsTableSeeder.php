<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DateTime;
use DB;


class ProductsTableSeeder extends Seeder
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
                    'name' => "MEN'S JACKET",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 21,
                    'price' => 2000,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "WOMEN'S JACKET",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 400,
                    'price' => 1600,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => "WOMEN'S SINGLE-TRACK SHOE",
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 37,
                    'price' => 678,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ],
                [
                    'name' => 'Enduro Boa Hydration Pack',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua consequat.',
                    'units' => 10,
                    'price' => 2100,
                    'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/enduro-boa-hydration-pack-AJQZ_JK3_hero.png',
                    'created_at' => new DateTime,
                    'updated_at' => null,
                ]
            ];

            DB::table('products')->insert($products);
    }
}
