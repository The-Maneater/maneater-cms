<?php

namespace App\Console\Commands;

use App\OldTag;
use Illuminate\Console\Command;
use Spatie\Tags\Tag;

class ProcessOldTags extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'process:old-tags';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convert Old Tags to new Tags';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $oldTags = OldTag::orderBy('id', 'ASC')->get();

        foreach($oldTags as $tag){
            Tag::create(['name' => $tag->name, 'id'=>$tag->id]);
        }
    }
}
