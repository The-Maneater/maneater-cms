<?php

use App\Classified;
use Illuminate\Database\Seeder;

class ClassifiedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classified = new Classified([
				'section'    => 'Help Wanted',
				'start_date' => \Carbon\Carbon::now(),
				'end_date'   => \Carbon\Carbon::tomorrow(),
				'content'    => 'Need new developer'
        	]);
        $classified->save();
    }
}
