<?php

use App\Story;
use Spatie\Tags\Tag;
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
       //$tag = new Tag();
       Story::first()->attachTag('Homecoming');
    }
}
