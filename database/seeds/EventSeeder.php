<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'name' => 'Free Food',
            'summary' => 'Its free food',
            'description' => 'It\'s free food',
            'start_date' => \Carbon\Carbon::now(),
            'end_date' => \Carbon\Carbon::now()->addHour(1),
            'allday' => false,
            'location' => 'Lowry Mall'
        ]);
    }
}
