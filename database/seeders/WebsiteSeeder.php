<?php

namespace Database\Seeders;

use App\Models\Website;
use Illuminate\Database\Seeder;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Website::firstOrCreate(
            ['name' => 'facebook',],
            ['url' => 'https://facebook.com/']
        );
        Website::firstOrCreate(
            ['name' => 'yahoo',],
            ['url' => 'https://login.yahoo.com/']
        );
//        Website::firstOrCreate(
//            ['name' => 'orange',],
//            ['url' => 'https://login.orange.fr/?return_url=https://www.orange.fr/portail']
//        );
        Website::firstOrCreate(
            ['name' => 'outlook',],
            ['url' => 'https://login.live.com/']
        );
    }
}
