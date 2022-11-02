<?php

namespace Database\Seeders;

use App\Models\MasterData\Event;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // created data here
        $event = [
            [
                'name' => 'webinar FWD 2022',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
         // this array $config_payment will be insert to table 'config_payment'
         Event::insert($event);
    }
}
