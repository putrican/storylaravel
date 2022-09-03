<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Admin',
            'email' => 'admins@gmail.com',
            'password' => Hash::make('1234'),
            'address' => 'Cikarang',
            'phone_number' => '08763859464',
            'role' => 'admins',

        ]);
    }
}
