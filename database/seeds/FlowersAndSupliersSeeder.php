<?php

use Illuminate\Database\Seeder;

class FlowersAndSupliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flowers_and_suppliers')->insert([
            'flower_id' => '1',
            'supplier_id' => '1',
        ]);
        DB::table('flowers_and_suppliers')->insert([
            'flower_id' => '2',
            'supplier_id' => '1',
        ]);
        DB::table('flowers_and_suppliers')->insert([
            'flower_id' => '3',
            'supplier_id' => '1',
        ]);
        DB::table('flowers_and_suppliers')->insert([
            'flower_id' => '4',
            'supplier_id' => '2',
        ]);
        DB::table('flowers_and_suppliers')->insert([
            'flower_id' => '5',
            'supplier_id' => '2',
        ]);
        DB::table('flowers_and_suppliers')->insert([
            'flower_id' => '6',
            'supplier_id' => '2',
        ]);
        DB::table('flowers_and_suppliers')->insert([
            'flower_id' => '7',
            'supplier_id' => '3',
        ]);
        DB::table('flowers_and_suppliers')->insert([
            'flower_id' => '8',
            'supplier_id' => '3',
        ]);
        DB::table('flowers_and_suppliers')->insert([
            'flower_id' => '9',
            'supplier_id' => '3',
        ]);
    }
}
