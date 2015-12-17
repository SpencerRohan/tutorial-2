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
          ['hex' => '#981b1e',
          'color' => 'red',
          'headline' => 'ralewayextrabold',
          'smHeadline' => 'ralewaybold',
          'body' => 'raleway'],

          ['hex' => '#00bff3',
          'color' => 'violet',
          'headline' => 'oswald-heavy',
          'smHeadline' => 'oswald-bold',
          'body' => 'helvetica'],

          ['hex' => '#DCA65A',
          'color' => 'deepskyblue',
          'headline' => 'roboto_slab--bold',
          'smHeadline' => 'roboto_slab',
          'body' => 'helvetica'],
        ]);
    }
}