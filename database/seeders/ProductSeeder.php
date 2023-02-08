<?php

namespace Database\Seeders;

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
        DB::table('products')->insert(
            [
              'name' => 'Lettuce',
              'detail' => 'Crunchy texture and unbeatable freshness for your everyday needs.',
              'price' => 43700,
              'photo' => 'lettuce.jpg',
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Mixed Salad',
                'detail' => 'All of your favorite types of leaves, combined. Your hassle-free option, ready to go.',
                'price' => 23000,
                'photo' => 'salad.jpg',
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Celery Stick',
                'detail' => 'Mildly bitter, celery sticks have a crunchy texture with a hint of saltiness.',
                'price' => 35000,
                'photo' => 'celer.jpg',
            ]
        );

        DB::table('products')->insert(
            [
                'name'=>'Kale',
                'detail' => 'Kale has crunchy leaves with strong flavors. The leaves are larger and crisp.',
                'price'=> 15700,
                'photo' => 'kale.jpg',
            ]
        );

        DB::table('products')->insert(
            [
                'name'=>'Rib Eye Steak 900g',
                'detail' => 'Many steak lovers say that this is the cut with the most flavour. We find it hard to choose, but we can guarantee a great steak that has been aged for at least 14 days and sourced from Grade A beef. 3 Steaks in a pack',
                'price'=> 145000,
                'photo' => 'ribeye.jpg',
            ]
        );


        DB::table('products')->insert(
            [
                'name'=>'Mix Salanova',
                'detail' => 'High in iron, this vegetable is mild and slightly sweet, making it a versatile ingredient for your everyday cooking.',
                'price'=> 17500,
                'photo' => 'power.jpg',
            ]
        );

        DB::table('products')->insert(
            [
                'name'=>'Power Salad - Ready 2 Eat',
                'detail' => 'High in iron, this vegetable is mild and slightly sweet, making it a versatile ingredient for your everyday cooking.',
                'price'=> 32500,
                'photo' => 'power.jpg',
            ]
        );

        DB::table('products')->insert(
            [
                'name'=>'Hamburgers',
                'detail' => 'If you don’t want the hassle of making your own burgers, let us do it for you. Thousands of satisfied Grillhouse and Gourmet Garage patrons can’t be wrong! We have adapted our restaurant burgers to a smaller home size (100g) but with the same great taste. 8 burgers per pack',
                'price'=> 46000,
                'photo' => 'burger.jpg',
            ]
        );

        DB::table('products')->insert(
            [
                'name'=>'Oxtail',
                'detail' => 'Perfect for a hearty winter meal and great when accompanied by a good bottle of red wine, our oxtail is cut from A Grade oxtail',
                'price'=> 150500,
                'photo' => 'oxtail.jpg',
            ]
        );

        DB::table('products')->insert(
            [
                'name'=>'Alaska Fresh Salmon',
                'detail' => 'Newly catched fresh fish',
                'price'=> 110500,
                'photo' => 'salmon.jpg',
            ]
        );

        DB::table('products')->insert(
            [
                'name'=>'T-Bone Steak',
                'detail' => 'The instantly recognisable T-bone is for people with serious appetites! Consisting of a sirloin and fillet steak separated by a T shaped bone, this cut is known in Italy as a Bistecca Fiorentina.  2 in a pack.',
                'price'=> 199100,
                'photo' => 'tbone.jpg',
            ]
        );

        DB::table('products')->insert(
            [
              'name' => 'Sage',
              'detail' => 'Not only a great ingredient to enhance flavors, sage is also rich in anti-inflammatory and antioxidant and is widely used as medicine.',
              'price' => 14500,
              'photo' => 'sage.jpg',
            ]
        );


    }
}
