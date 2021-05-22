<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

//            Admin info
        [
            'full_name' => 'Jhon Snow',
            'username' => 'snow-admin',
            'email' => 'snow@mail.com',
            'password' => Hash::make('pa$$w0rd'),
            'role' => 'admin',
            'status' => 'active',
        ],
//            Vendor info
        [
            'full_name' => 'John Thunder',
            'username' => 'john-thunder',
            'email' => 'thunder@mail.com',
            'password' => Hash::make('pa$$w0rd'),
            'role' => 'vendor',
            'status' => 'active',
        ],
//            Customer info
        [
            'full_name' => 'John Wind',
            'username' => 'john-wind',
            'email' => 'wind@mail.com',
            'password' => Hash::make('pa$$w0rd'),
            'role' => 'customer',
            'status' => 'active',
        ],
        ]);
    }
}
