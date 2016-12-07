<?php

use App\Volume;
use Illuminate\Database\Seeder;

class VolumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $volume = new Volume([
        	'name' => 1,
        	'first_issue_date' => \Carbon\Carbon::now(),
        	'period' => 'August 2016 - May 2017',
        	'publication' => 'Maneater'
        	]);
        $volume->save();
    }
}
