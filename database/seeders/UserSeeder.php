<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        //Create anew user

        // $user = new \App\Models\User();
        // $user->name = 'Admin';
        // $user->phone = '08123456789';
        // $user->email = 'admin@gmail.com';
        // $user->password = bcrypt('admin1234');
        // $user->save();

        $user =[
            [
                'name' => 'Admin',
                'phone' => '081234567890',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'user',
                'phone' => '08645826545',
                'email' => 'user@gmail.com',
                'password' => bcrypt('123456'),
            ],
        ];

        //Insert the user into the database
        DB::table('users')->insert($user);
    }
}