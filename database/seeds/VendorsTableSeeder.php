<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
          [
          'name' => "Venture",
          'link' => "#",
          'created_at' => Carbon::now(),
          'updated_at' => null,
          ],

          [
          'name' => "Zayre",
          'link' => "#",
          'created_at' => Carbon::now(),
          'updated_at' => null,
          ],

          [
          'name' => "Woolworth",
          'link' => "#",
          'created_at' => Carbon::now(),
          'updated_at' => null,
          ],

          [
          'name' => "Marshall Field's",
          'link' => "#",
          'created_at' => Carbon::now(),
          'updated_at' => null,
          ],

          [
          'name' => "Bamberger's",
          'link' => "#",
          'created_at' => Carbon::now(),
          'updated_at' => null,
          ],
        ]);
    }
}