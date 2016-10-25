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
        $this->call(SectionSeeder::class);
        $this->call(IssueSeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(StafferSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(GraphicSeeder::class);
        $this->call(StorySeeder::class);
        $this->call(LayoutSeeder::class);
    }
}
