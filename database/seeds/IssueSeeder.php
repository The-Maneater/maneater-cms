<?php

use App\Issue;
use App\Volume;
use Illuminate\Database\Seeder;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $issue = new Issue([
            'issue_number' => 12
        ]);
       $volume = Volume::first();
       $volume->issues()->save($issue);
    }
}
