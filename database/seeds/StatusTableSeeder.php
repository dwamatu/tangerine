<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'status' => 'Open',
        ]);
        DB::table('statuses')->insert([
            'status' => 'Closed',
        ]);
        DB::table('statuses')->insert([
            'status' => 'Booked',
        ]);
    }
}
