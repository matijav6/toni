<?php

use Illuminate\Database\Seeder;

class OrderFlowersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_flowers')->insert([
            'flower_id' => '1',
            'color_id' => '1',
            'quantity' => '10',
            'order_id' => '1',
        ]);
        DB::table('order_flowers')->insert([
            'flower_id' => '2',
            'color_id' => '2',
            'quantity' => '40',
            'order_id' => '1',
        ]);
        DB::table('order_flowers')->insert([
            'flower_id' => '4',
            'color_id' => '7',
            'quantity' => '20',
            'order_id' => '2',
        ]);
        DB::table('order_flowers')->insert([
            'flower_id' => '5',
            'color_id' => '3',
            'quantity' => '50',
            'order_id' => '2',
        ]);
    }
}
