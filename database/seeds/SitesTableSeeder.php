<?php

use Illuminate\Database\Seeder;

class SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->insert([
            'landmark' => 'Haile Selassie RBT',
            'longitude' => '36.8204802274704',
            'latitude' => '-1.29271505514224',
            'size' => 'StreetLight',
            'status_id' => '1',
            'user_id' => '1',
        ]);
        DB::table('sites')->insert([
            'landmark' => 'Museum Hill',
            'longitude' => '36.8126857280731',
            'latitude' => '-1.27455569403369',
            'size' => 'Billboard',
            'status_id' => '1',
            'user_id' => '1',
        ]);
        DB::table('sites')->insert([
            'landmark' => 'Safaricom HQ',
            'longitude' => '36.786373257637',
            'latitude' => '-1.25939419189618',
            'size' => 'StreetLight',
            'status_id' => '1',
            'user_id' => '1',
        ]);
        DB::table('sites')->insert([
            'landmark' => 'Safaricom DCs Office',
            'longitude' => '36.7870384454727',
            'latitude' => '-1.25953363306924',
            'size' => 'StreetLight',
            'status_id' => '1',
            'user_id' => '1',
        ]);


    }
}
