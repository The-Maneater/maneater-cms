<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stories')->insert([
            'slug'          => 'test',
            'runsheet_slug' => 'my-project',
            'title'         => 'Five steps to transform your dorm',
            'issue'         => 'Issue 99',
            'publish_date'  => '2016-08-08 12:00:00',
            'cDeck'         => 'You’ll make it the new home you never want to leave.',
            'byline'        => 'Michael Smith Jr',
            'section'       => 1,
            'body'          => "There’s no place like home. Dorothy really hit the nail on the head with that one. For most of us, moving away from home and into a new space is a jarring and unnerving experience. But there are several steps you can take to transform your dorm or apartment into a bona fide home away from home.

Start by filling your new space. You know, with all the bedding, throw pillows and decorations you and your mom bought at Target. Unpack your clothes and find a place for everything. While doing this, try to maximize the space. You have a lot to fit in one small room, so use shelves, drawers and other storage to stow your belongings in a way that keeps clutter at a minimum. This will make your room feel larger and more comfortable (Helpful tip: Don’t forget about the space under your bed; suitcases, bags and other large items will fit well and stay out of the way). 

Next, put up pictures, mementos and memorabilia that remind you of the people and places you love and miss. You want this space to be cozy and welcoming, so include the little things that make you smile. Unless you’re using blue painter’s tape, walls are generally off-limits in residence halls, depending on the building you’re in. Hang small items with Command Strips, and use a bulletin board to showcase cards, notes and pictures. Make your new abode personal and special, and soon it will start to feel like your own.
 
Making a space into a home doesn’t stop at your door; get acquainted with your residence hall. The entire place is for you, so make the most of it. Go exploring and find the kitchen, lounges and special nooks where you would like to spend time. Move beyond the boundaries of your small room, and make the entire hall your new home. 

It has been said that home is not where you are; it’s who you’re with. Put these words to the test and meet your neighbors and fellow Tigers. Friendly faces are essential to any home, and your floor will be one big happy family in no time. This may require you to step out of your comfort zone, but you won’t regret taking that risk once you’ve done it. Who knows; maybe you’ll make a lifelong friend along the way.  

As you transform a new space into home, try not to replicate where you’re from. Bring pieces of that initial home with you, but let the new communities you’re now a part of (residence hall or apartment complex, Mizzou and Columbia) shape your new home. You’re here to grow in myriad facets, so let the space grow with you and reflect your personal evolution.

There may be no place like home, but there’s also no place like Mizzou. Through these simple steps, you may find that the home you’ll never want to leave is right here in front of you.

_Edited by Katie Rosso | krosso@themaneater.com_",
            'priority'      => 10
        ]);

        DB::table('sections')->insert([
        	'name' => 'Campus',
        	'slug' => 'campus'
        ]);

        DB::table('sections')->insert([
        	'name' => 'Outlook',
        	'slug' => 'outlook'
        ]);

        DB::table('sections')->insert([
        	'name' => 'UNews',
        	'slug' => 'unews'
        ]);

        DB::table('sections')->insert([
        	'name' => 'Sports',
        	'slug' => 'sports'
        ]);

        DB::table('sections')->insert([
        	'name' => 'Opinion',
        	'slug' => 'opinion'
        ]);

        DB::table('sections')->insert([
        	'name' => 'Blogs',
        	'slug' => 'blogs'
        ]);

        DB:table('staffers')->insert([
            'first-name' => 'Michael',
            'last-name'  => 'Smith Jr'
        ]);

    }
}
