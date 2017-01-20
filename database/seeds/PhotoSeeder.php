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
        foreach(range(1,5) as $index){
            $photo = new Photo([
                'title'       => 'Michael Scherer ' . $index,
                'description' => 'Redshirt senior Michael Scherer watches the game on Oct. 22 after leaving the game with a knee injury.',
                'dateTaken'   => \Carbon\Carbon::now(),
                'location'    => '/images/scherer.jpg',
                'publish_date' => \Carbon\Carbon::now(),
                'section_id' => 1,
                'issue_id' => 1,
                'staffer_id' => 1
            ]);
            $photo->save();
            $photo->photographers()->attach(1);
        }
    }
}
