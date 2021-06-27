<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
        	'name' => 'master',
        	'email' => 'aarashiro@ucss.edu.pe',
        	'password' => bcrypt('secret')
        ]);
        User::create([
            'name' => 'Usuario 1',
            'email' => 'client1@ucss.pe',
            'password' => bcrypt('secret')
        ]);
    }
}
