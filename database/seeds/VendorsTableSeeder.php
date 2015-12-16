<?php

use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendors')->insert([
          ['name' => "Venture",
          'link' => "#"],
          ['name' => "Zayre",
          'link' => "#"],
          ['name' => "Woolworth",
          'link' => "#"],
          ['name' => "Marshall Field's",
          'link' => "#"],
          ['name' => "Bamberger's",
          'link' => "#"]
        ]);
    }
}