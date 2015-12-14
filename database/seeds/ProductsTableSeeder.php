<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
          'code' => 'anvil',
          'name' => 'Anvil',
          'layout' => 'default',
          'headline' => "<h1 class='-headline'>Stop Accelerate Incredibilus in his tracks.</h1><p>Crush pesky roadrunners with ease.</p>",
          'content' => "<h3>ACME Product Line-up</h3><p>Anvil Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>"
        ]);
    }
}