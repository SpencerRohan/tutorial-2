<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([  
          'name' => 'Spencer',
          'email' => 'admin@acme.com',
          'password' => bcrypt('password'),
          'is_admin' => true,
        ]);

        factory('App\User', 30)->create();
    }
}