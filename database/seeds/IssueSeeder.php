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
        $volume = Volume::first();
        foreach(range(1, 12) as $i){
            $issue = new Issue([
                'issue_number' => $i,
                'created_at' => Carbon\Carbon::now()->subMinutes(12 - $i)
            ]);
            $volume->issues()->save($issue);
        }

    }
}
