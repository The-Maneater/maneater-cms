<?php

use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,10) as $index) {
            $ad = new \App\Ad([
                'size'           => 'cube',
                'duration'       => '2 weeks',
                'purchaser'      => 'Cube ' . $index,
                'image_url'      => 'http://placehold.it/250x100',
                'provider_url'   => 'http://missouri.edu',
                'times_served'   => 0,
                'campaign_start' => \Carbon\Carbon::now()->addWeeks(-2),
                'campaign_end'   => \Carbon\Carbon::now()->addWeeks(2)
            ]);
            $ad->save();
        }

        foreach(range(1,10) as $index) {
            $ad = new \App\Ad([
                'size'           => 'banner',
                'duration'       => '2 weeks',
                'purchaser'      => 'Banner ' . $index,
                'image_url'      => 'http://placehold.it/880x100',
                'provider_url'   => 'http://missouri.edu',
                'times_served'   => 0,
                'campaign_start' => \Carbon\Carbon::now()->addWeeks(-2),
                'campaign_end'   => \Carbon\Carbon::now()->addWeeks(2)
            ]);
            $ad->save();
        }
    }
}
