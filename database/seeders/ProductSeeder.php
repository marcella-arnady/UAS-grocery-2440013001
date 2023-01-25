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
              'name' => 'Keranjang Laundry Rotan / Keranjang Anyaman Rotan / Basket Rotan KR02 - Size S',
              'detail' => 'Keranjang pakaian terbuat dari anyaman rotan untuk menampung pakaian dan membuat ruangan terlihat teratur.',
              'price' => 130000,
              'photo' => 'keranjang.jpg',
              'category_id' => 2,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Mangkok Eceng Gondok / Wadah Anyaman Eceng Gondok KG22',
                'detail' => 'Keranjang Buah Anyaman ini dibuat untuk para penyuka home decor yang sedang tren, bisa juga untuk keranjang buah agar lebih terlihat menarik dan menambah kesan cantik di meja makan',
                'price' => 66000,
                'photo' => 'mangkok.jpg',
                'category_id' => 2,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Rumah Kucing Rotan / Kandang Kucing / Tempat Tidur Kucing RKC01',
                'detail' => 'Tempat tidur kucing estetik yang terbuat dari bahan alami berupa rotan pilihan yang sudah dikeringkan.',
                'price' => 356000,
                'photo' => 'kandangkucing.jpg',
                'category_id' => 2,
            ]
        );

        DB::table('products')->insert(
            [
                'name'=>'Tampah Bambu Kotak / Nampan Bambu Kotak / Tampah Tumpeng KOTAK - 30 x 30 cm',
                'detail' => 'Tampah Bambu Kotak Terbuat dari anyaman bambu pilihan yang sudah dibersihkan dan dianyam oleh pengrajin terampil.',
                'price'=> 28500,
                'photo' => 'tampah.jpg',
                'category_id'=> 3,
            ]
        );

        DB::table('products')->insert(
            [
                'name'=>'Kap Lampu Rotan Gantung / Kap Lampu Cafe / Cup Lampu Rotan CLR02 - Model 6',
                'detail' => 'Kap lampu rotan terbuat dari anyaman rotan agar ruangan terlihat lebih minimalis dengan kesan alam untuk menambah kehangatan di tengah keluarga.',
                'price'=> 145000,
                'photo' => 'lampu.jpg',
                'category_id'=> 2,
            ]
        );


        DB::table('products')->insert(
            [
                'name'=>'Kotak Tissue Kayu Jati / Kotak Tisu Jati / Tempat Tisu Kayu Jati KTJ01',
                'detail' => 'Kotak tissue kayu jati berbentuk persegi yang dibuat langsung oleh tangan pengrajin lokal yang terampil untuk memperindah ruangan.',
                'price'=> 120000,
                'photo' => 'tisu.jpg',
                'category_id'=> 1,
            ]
        );

        DB::table('products')->insert(
            [
                'name'=>'Baki Kayu Jati / Nampan Kayu Jati / Tray Kayu Kotak NJ08',
                'detail' => 'Baki kayu jati terbuat dari kayu jati yang sudah dihaluskan dan memiliki serat kayu yang eksotis dan elegan.',
                'price'=> 86000,
                'photo' => 'baki.jpg',
                'category_id'=> 1,
            ]
        );

        DB::table('products')->insert(
            [
                'name'=>'Talenan Kayu / Talenan Kayu Jati / Talenan Persegi Gagang T06',
                'detail' => 'Talenan kayu jati terbut dari kayu jati yang dikeringkan dan dihaluskan permukaannya, serta memiliki serat kayu yang eksotis dan elegan',
                'price'=> 46000,
                'photo' => 'talenan.jpg',
                'category_id'=> 1,
            ]
        );

        DB::table('products')->insert(
            [
                'name'=>'Keranjang Bambu / Kotak Bambu / Anyaman Bambu Persegi - S',
                'detail' => 'Keranjang bambu persegi terbuat dari anyaman bambu berkualitas untuk membuat rumah terlihat rapi dan estetik.',
                'price'=> 20500,
                'photo' => 'keranjangpersegis.jpg',
                'category_id'=> 3,
            ]
        );

        DB::table('products')->insert(
            [
                'name'=>'Keranjang Dimsum Bambu / Klakat Bambu',
                'detail' => 'Wadah yang terbuat dari bambu untuk mengukus dimsum dan mendekor meja makan.',
                'price'=> 19500,
                'photo' => 'dimsum.jpg',
                'category_id'=> 3,
            ]
        );

        DB::table('products')->insert(
            [
                'name'=>'Rak Bambu / Rak Bumbu Dapur Susun / Anyaman Bambu Rotan / Rak Bawang',
                'detail' => 'Wadah yang terbuat dari bambu untuk menaruh bawang atau bumbu dapur agar menghemat tempat di dapur.',
                'price'=> 179500,
                'photo' => 'bawang.jpg',
                'category_id'=> 3,
            ]
        );

        DB::table('products')->insert(
            [
              'name' => 'Alat Penggaruk Punggung Kayu S M L',
              'detail' => 'Alat penggaruk punggung terbuat dari kayu panjang 40cm, nyaman digunakan, sudah di-finishing oleh para pengrajin.',
              'price' => 17500,
              'photo' => 'penggaruk.jpg',
              'category_id' => 1,
            ]
        );


    }
}
