<?php

use Illuminate\Database\Seeder;


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
            'email' => 'chris@gmail.com',
            'username' => 'Chris Kirubay',
            'password' => bcrypt('test'),
            'confirm_password' => bcrypt('test'),
            'role' => 'Admin',

        ]);
    }
}
