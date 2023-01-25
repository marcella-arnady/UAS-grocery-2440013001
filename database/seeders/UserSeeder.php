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
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin123'),
            'role'=>'administrator',
            'gender'=>'male',
            'country'=>'indonesia'
        ]);

        DB::table('users')->insert([
            'name'=>'Fortune',
            'email'=>'fortune@gmail.com',
            'password'=>Hash::make('barbatos123'),
            'role'=>'administrator',
            'gender'=>'male',
            'country'=>'indonesia'
        ]);

        DB::table('users')->insert([
            'name'=>'Johny',
            'email'=>'johny@gmail.com',
            'password'=>Hash::make('johny123'),
            'role'=>'registered',
            'gender'=>'male',
            'country'=>'indonesia'
        ]);

        DB::table('users')->insert([
            'name'=>'Laura',
            'email'=>'laura@gmail.com',
            'password'=>Hash::make('laura123'),
            'role'=>'registered',
            'gender'=>'female',
            'country'=>'indonesia'
        ]);
    }
}
