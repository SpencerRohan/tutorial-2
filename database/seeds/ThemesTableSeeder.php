<?php

use Illuminate\Database\Seeder;

class ThemesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('themes')->insert([
          'product_id' => 1,
          'hex' => '#981b1e',
          'color' => 'red',
          'headline' => 'ralewayextrabold',
          'sm-headline' => 'ralewaybold',
          'body' => 'raleway'
        ]);
    }
}