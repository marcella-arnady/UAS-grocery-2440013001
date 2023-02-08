<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name'=>'Admin',
            'last_name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin123'),
            'role'=>'administrator',
            'gender'=>'male',
            'photo' => 'profilepic.png'
        ]);


        DB::table('users')->insert([
            'first_name'=>'Johny',
            'last_name'=>'Smith',
            'email'=>'johny@gmail.com',
            'password'=>Hash::make('johny123'),
            'role'=>'registered',
            'gender'=>'male',
            'photo' => 'profilepic.jpg'
        ]);

       
    }
}
