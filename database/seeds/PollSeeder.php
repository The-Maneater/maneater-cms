<?php

use App\Poll;
use Illuminate\Database\Seeder;

class PollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $poll = new Poll([
            'question' => 'What is your favorite Netflix show?',
            'start_date' => \Carbon\Carbon::now()->addDays(-2),
            'end_date' => \Carbon\Carbon::now()->addDays(2),
            'publication_id' => 1
        ]);

        $poll->save();

        $poll->questions()->createMany([
           [
               'answer' => 'House of Cards'
           ],
            [
                'answer' => 'Stranger Things'
            ],
            [
                'answer' => 'Luke Cage'
            ]
        ]);
    }
}
