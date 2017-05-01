<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $user = User::create([
//            'username' => 'test',
//            'email'    => 'test@test.com',
//            'password' => bcrypt('123456')
//        ]);

        $super = User::create([
            'username' => 'super',
            'email'    => 'test@test.com',
            'password' => bcrypt('2050978Lol')
        ]);

        $editor = User::create([
            'username' => 'editor',
            'email'    => 'editor@test.com',
            'password' => bcrypt('maneater17')
        ]);

        $eic = User::create([
            'username' => 'eic',
            'email'    => 'eic@test.com',
            'password' => bcrypt('maneater17')
        ]);
    }
}
