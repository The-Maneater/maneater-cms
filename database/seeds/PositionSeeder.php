<?php

use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            'title'              => 'Editor-In-Chief',
            'is_editorial_board' => 1,
            'is_exec'            => 1,
            'priority'           => 1
        ]);
        DB::table('positions')->insert([
            'title'              => 'Staff Writer',
            'is_editorial_board' => 0,
            'is_exec'            => 0,
            'priority'           => 0
        ]);
        DB::table('positions')->insert([
            'title'              => 'Senior Staff Writer',
            'is_editorial_board' => 0,
            'is_exec'            => 0,
            'priority'           => 0
        ]);
        DB::table('positions')->insert([
            'title'              => 'Reporter',
            'is_editorial_board' => 0,
            'is_exec'            => 0,
            'priority'           => 0
        ]);
        DB::table('positions')->insert([
            'title'              => 'Photographer',
            'is_editorial_board' => 0,
            'is_exec'            => 0,
            'priority'           => 0
        ]);
        DB::table('positions')->insert([
            'title'              => 'Senior Staff Photographer',
            'is_editorial_board' => 0,
            'is_exec'            => 0,
            'priority'           => 0
        ]);
        DB::table('positions')->insert([
            'title'              => 'Staff Photographer',
            'is_editorial_board' => 0,
            'is_exec'            => 0,
            'priority'           => 0
        ]);

        DB::table('positions')->insert([
            'title'              => 'Online Development Editor',
            'is_editorial_board' => 1,
            'is_exec'            => 0,
            'priority'           => 5
        ]);
    }
}
