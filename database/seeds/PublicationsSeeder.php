<?php

use App\Publication;
use Illuminate\Database\Seeder;

class PublicationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maneater = new Publication(['name' => 'The Maneater']);
        $move = new Publication(['name' => 'MOVE']);

        $maneater->save();
        $move->save();
    }
}
