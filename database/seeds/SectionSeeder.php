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
        	'slug' => 'campus',
            'publication_id' => 1
        ]);

        DB::table('sections')->insert([
        	'name' => 'UNews',
        	'slug' => 'unews',
            'publication_id' => 1
        ]);

        DB::table('sections')->insert([
        	'name' => 'Sports',
        	'slug' => 'sports',
            'publication_id' => 1
        ]);

        DB::table('sections')->insert([
        	'name' => 'Opinion',
        	'slug' => 'opinion',
            'publication_id' => 1
        ]);

        DB::table('sections')->insert([
        	'name' => 'Projects',
        	'slug' => 'projects',
            'publication_id' => 1
        ]);

        DB::table('sections')->insert([
            'name' => 'Angles',
            'slug' => 'angles',
            'publication_id' => 2
        ]);
        DB::table('sections')->insert([
            'name' => 'Features',
            'slug' => 'features',
            'publication_id' => 2
        ]);
        DB::table('sections')->insert([
            'name' => 'Culture',
            'slug' => 'culture',
            'publication_id' => 2
        ]);
    }
}
