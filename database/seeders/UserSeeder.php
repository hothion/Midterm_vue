<?php

namespace Database\Seeders;

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
            'firstname'=>"Ho",
            'lastname'=>"On",
            'username'=>"admin",
            'password'=>Hash::make('123'),
            'image'=>"/image/dd.jpg",
            'birthday'=>"15/10/9000",
        ]);
    }
}
