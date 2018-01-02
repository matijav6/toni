<?php

use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'user_id' => '1',
            'price' => '100',
            'note' => 'Kupac je platio 50kn akontaciju.',
            'office_id' => '1',
        ]);
        DB::table('orders')->insert([
            'user_id' => '2',
            'price' => '300',
            'note' => 'Kupac je platio 100kn akontaciju.',
            'office_id' => '2',
        ]);
    }
}
