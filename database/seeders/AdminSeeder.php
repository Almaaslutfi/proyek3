<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'first_name' => 'admin',
            'last_name' => '123',
            'username' => 'admin123',
            'email' => 'admin123@gmail.com',
            'password' => bcrypt('123123'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'administrasi',
            'last_name' => '123',
            'username' => 'administrasi123',
            'email' => 'administrasi123@gmail.com',
            'password' => bcrypt('123123'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'user',
            'last_name' => '123',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123123'),
        ]);
    }
}
