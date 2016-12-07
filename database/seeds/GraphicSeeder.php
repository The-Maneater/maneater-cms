<?php

use App\Graphic;
use Illuminate\Database\Seeder;

class GraphicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $graphic = new Graphic([
			'title'       => 'The Difference of a Year',
			'description' => ' ',
			'link'        => '/images/protests.jpg',
            'publish_date' => \Carbon\Carbon::now()
        	]);
        $graphic->save();
        $graphic->designer()->attach(2);
    }
}
