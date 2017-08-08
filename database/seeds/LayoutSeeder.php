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
            'link'       => '/media/layouts/layout1.jpg',
            'date_published' => \Carbon\Carbon::now()
        	]);
        $layout->staffer()->associate(\App\Staffer::find(2));
        $layout->issue()->associate(\App\Issue::first());
        $layout->section()->associate(\App\Section::first());
        $layout->save();
    }
}
