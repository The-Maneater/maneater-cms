<?php

use App\Section;
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
        $campus = Section::create([
            'name' => 'Campus',
            'slug' => 'campus',
            'publication_id' => 1
        ]);
        $unews = Section::create([
            'name' => 'UNews',
            'slug' => 'unews',
            'publication_id' => 1
        ]);
        $sports = Section::create([
            'name' => 'Sports',
            'slug' => 'sports',
            'publication_id' => 1
        ]);
        $opinion = Section::create([
            'name' => 'Opinion',
            'slug' => 'opinion',
            'publication_id' => 1
        ]);
        $projects = Section::create([
            'name' => 'Projects',
            'slug' => 'projects',
            'publication_id' => 1
        ]);
        $blogs = Section::create([
            'name' => 'Blogs',
            'slug' => 'blogs',
            'publication_id' => 1
        ]);

        $angles = Section::create([
            'name' => 'Angles',
            'slug' => 'angles',
            'publication_id' => 2
        ]);
        $features = Section::create([
            'name' => 'Features',
            'slug' => 'features',
            'publication_id' => 2
        ]);
        $culture = Section::create([
            'name' => 'Culture',
            'slug' => 'culture',
            'publication_id' => 1
        ]);
    }
}
