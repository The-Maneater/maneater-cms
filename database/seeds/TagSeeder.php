<?php

use App\Story;
use App\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $tag = new Tag([
       		'name' => 'Homecoming'
       	]);
       $tag->save();
       Story::first()->tags()->attach($tag);
    }
}
