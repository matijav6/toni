<?php

use Illuminate\Database\Seeder;

class OrderDeliveriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_deliveries')->insert([
            'buyer' => 'Dora Trogrlić',
            'address' => 'Ulica Halic 1, 42204, Varaždin Breg',
            'order_id' => '1',
        ]);
        DB::table('order_deliveries')->insert([
            'buyer' => 'Ivana Vukadin',
            'address' => 'Ulica Frankopana 4, 10000, Zagreb',
            'order_id' => '2',
        ]);
    }
}