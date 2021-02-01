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
            'name' => 'Jeet',
            'email' => 'jeet@test.com',
            'phone' => '01893992229',
            'address' => 'Dhaka',
            'password' => Hash::make('jeet1234')

        ]);
    }
}
