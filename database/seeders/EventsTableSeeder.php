<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Event::create([
                'event_name' => 'My Event',
                'start_date' => date('2021-06-01'),
                'end_date' => date('2021-06-15'),
                'days_selected' => array(1, 2, 4, 5)
            ]
        );
    }
}
