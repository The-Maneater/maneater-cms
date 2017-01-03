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

        $michael->save();
        $reiker->save();
        $michael->staffPositions()->attach(2, ['start_date' => \Carbon\Carbon::now(), 'end_date' => null]);
        $reiker->staffPositions()->attach(2, ['start_date' => \Carbon\Carbon::now(), 'end_date' => null]);
    }
}
