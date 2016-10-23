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
        DB::table('staffers')->insert([
            'first_name' => 'Michael',
            'last_name'  => 'Smith Jr',
            'is_active'  => 1
        ]);

        DB::table('staffers')->insert([
            'first_name' => 'Reiker',
            'last_name'  => 'Seiffe',
            'is_active'  => 1
        ]);

        $michael = App\Staffer::find(1);
        $reiker = App\Staffer::find(2);
        $michael->staffPositions()->attach(2, ['start_date' => \Carbon\Carbon::now(), 'end_date' => \Carbon\Carbon::now()]);
        $reiker->staffPositions()->attach(2);
    }
}
