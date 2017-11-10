<?php

use App\Staffer;
use Illuminate\Database\Seeder;

class StafferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $michael = new Staffer([
            'first_name' => 'Michael',
            'last_name'  => 'Smith Jr',
            'is_active'  => 1
        ]);

        $reiker = new Staffer([
            'first_name' => 'Reiker',
            'last_name'  => 'Seiffe',
            'is_active'  => 1
        ]);

        $jd = new Staffer([
            'first_name' => 'John',
            'last_name'  => 'Doe',
            'is_active'  => 1
        ]);

        $jad = new Staffer([
            'first_name' => 'Jane',
            'last_name'  => 'Doe',
            'is_active'  => 1
        ]);

        $michael->save();
        $reiker->save();
        $jd->save();
        $jad->save();
        $michael->writer_pos = "Reporter";
        $reiker->writer_pos = "Reporter";
        $jd->writer_pos = "Reporter";
        $jad->writer_pos = "Reporter";
        $michael->photo_pos = "Photographer";
        $reiker->photo_pos = "Photographer";
        $jd->photo_pos = "Photographer";
        $jad->photo_pos = "Photographer";
        $michael->save();
        $reiker->save();
        $jd->save();
        $jad->save();
//        $michael->positions()->attach(2, ['start_date' => \Carbon\Carbon::now(), 'end_date' => null]);
//        $reiker->positions()->attach(2, ['start_date' => \Carbon\Carbon::now(), 'end_date' => null]);
//        $jad->positions()->attach(2, ['start_date' => \Carbon\Carbon::now(), 'end_date' => null]);
//        $jd->positions()->attach(2, ['start_date' => \Carbon\Carbon::now(), 'end_date' => null]);
//        $michael->positions()->attach(5, ['start_date' => \Carbon\Carbon::now(), 'end_date' => null]);
//        $reiker->positions()->attach(5, ['start_date' => \Carbon\Carbon::now(), 'end_date' => null]);
//        $jad->positions()->attach(5, ['start_date' => \Carbon\Carbon::now(), 'end_date' => null]);
//        $jd->positions()->attach(5, ['start_date' => \Carbon\Carbon::now(), 'end_date' => null]);
        $michael->positions()->attach(\App\Position::findByTitle('Online Development Editor'), ['period' => 'Summer 2017 - Current']);


        $reiker->positions()->attach(\App\Position::findByTitle('Online Development Editor'),  ['period' => 'Summer 2016 - May 2017']);
    }
}
