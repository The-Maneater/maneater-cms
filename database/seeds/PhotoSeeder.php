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
                'location'    => 'images/scherer.jpg',
                'publish_date' => \Carbon\Carbon::now(),
                'section_id' => 1,
                'issue_id' => 1,
                'staffer_id' => 1
            ]);
            $photo->save();
            $photo->photographer()->associate(1);
        }

        /* http://placehold.it/350x150*/
        $photo = Photo::create([
            'title'       => '350 * 150 Placeholder',
            'description' => "This doesn't actually do anything.",
            'location'    => 'http://placehold.it/350x150',
            'publish_date' => \Carbon\Carbon::now(),
            'section_id' => 1,
            'issue_id' => 1,
            'staffer_id' => 1
        ]);

        $photo = Photo::create([
            'title'       => '250 * 150 Placeholder',
            'description' => "This doesn't actually do anything.",
            'location'    => 'http://placehold.it/250x100',
            'publish_date' => \Carbon\Carbon::now(),
            'section_id' => 1,
            'issue_id' => 1,
            'staffer_id' => 1
        ]);
    }
}
