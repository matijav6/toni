<?php

use Illuminate\Database\Seeder;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'supplier_name' => 'Trgo-flora d.o.o.',
        ]);
        DB::table('suppliers')->insert([
            'supplier_name' => 'WEB floers d.o.o.',
        ]);
        DB::table('suppliers')->insert([
            'supplier_name' => 'MBM d.o.o.',
        ]);
    }
}
