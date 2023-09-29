<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $productsdetail=[
        [
            'name'=>'Lg lg5 Mobile',
            'price'=>'120000-RS',
            'cetagary'=>'Mobilephone',
            'Discription'=>'This is lg mobile lg7p . which has initially 8gb Ram and its extendable and it has amazing 32Px ultra high class camera.',
            'gallery'=>'images/lgmobile.jpg',
        ],
        [
        'name'=>'Samsung S23 Ultra',
        'price'=>'250000-RS',
        'cetagary'=>'Mobilephone',
        'Discription'=>'This is lg mobile Samsung S23 Ultra . which has initially 32gb Ram and its extendable and it has amazing 128Px ultra high class camera.',
        'gallery'=>'images/s23ultrafull.jpg',
        ],
        [
    'name'=>'I Phone 15-pro',
    'price'=>'520000-RS',
    'cetagary'=>'Mobilephone',
    'Discription'=>'This is lg mobile Iphone 15pro . which has initially 16gb Ram and its rom is about 1Tb and it has amazing 32px ultra high class camera.',
    'gallery'=>'images/iphone-15-pro-gray.jpg',
        ],
        [
    'name'=>'I phone 11-pro',
    'price'=>'120000-RS',
    'cetagary'=>'Mobilephone',
    'Discription'=>'This is lg mobile Iphone 11pro . which has initially 4gb Ram and 256gb Rom and it has amazing 12gp ultra high class camera.',
    'gallery'=>'images/11pro.jpg',
        ],
[
    'name'=>'Nike-jooger-g5-Shoes',
    'price'=>'12000-RS',
    'cetagary'=>'shoes',
    'Discription'=>'This is shoes with great comfort on the time of running . which has initially soft sole and its longlasting and it has amazing grip high class mateirial.',
    'gallery'=>'images/jooger1.jpg',
        ],
        [
    'name'=>'Nike-Air-A5',
    'price'=>'18000-RS',
    'cetagary'=>'shoes',
    'Discription'=>'This is shoes with great comfort good-looking formal shoes . which has initially soft sole and its longlasting and it has amazing grip high class mateirial.',
    'gallery'=>'images/a5air.jpg',
        ],
        [
    'name'=>'Nike-Air-White',
    'price'=>'19000-RS',
    'cetagary'=>'shoes',
    'Discription'=>'This is shoes with great comfort good-looking formal joger . which has initially soft sole and its longlasting and it has amazing grip high class mateirial.',
    'gallery'=>'images\wightnike.jpg',
        ]
        ];
        DB::table('products')->insert($productsdetail); 
    }
}
