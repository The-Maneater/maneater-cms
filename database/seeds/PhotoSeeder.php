<?php

use App\Photo;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photo = new Photo([
            'title'       => 'Michael Scherer',
            'description' => 'Redshirt senior Michael Scherer watches the game on Oct. 22 after leaving the game with a knee injury.',
            'dateTaken'   => \Carbon\Carbon::now(),
            'location'    => '/images/scherer.jpg',
            'publish_date' => \Carbon\Carbon::now()
        	]);
        $photo->save();
        $photo->photographers()->attach(1);
    }
}
