<?php

use App\Layout;
use Illuminate\Database\Seeder;

class LayoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $layout = new Layout([
            'title'      => 'Maneater Front from Oct. 19, 2016',
            'link'       => '/images/layout1.jpg',
        	]);
        $layout->staffer()->associate(\App\Staffer::find(2));
        $layout->save();
    }
}