<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert([
            'client_name' => 'maurice tharau',
            'client_contact' => '0713724770',
            'client_email' => 'mauricetharao@gmail.com',
        ]);
    }
}
