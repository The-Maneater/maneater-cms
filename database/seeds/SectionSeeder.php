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

        $aroundComo = Section::create([
            'name' => 'Around Como',
            'slug' => 'around-como',
            'publication_id' => 2
        ]);
        $features = Section::create([
            'name' => 'Features',
            'slug' => 'features',
            'publication_id' => 2
        ]);
        $onCampus = Section::create([
            'name' => 'On Campus',
            'slug' => 'on-campus',
            'publication_id' => 2
        ]);

        $insight = Section::create([
            'name' => 'Insight',
            'slug' => 'insight',
            'publication_id' => 2
        ]);

        $guide = Section::create([
            'name' => 'Guide',
            'slug' => 'guide',
            'publication_id' => 2
        ]);
    }
}
