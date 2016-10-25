<?php

use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
        	'name' => 'Campus',
        	'slug' => 'campus'
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
        	'name' => 'Projects',
        	'slug' => 'projects'
        ]);
    }
}
