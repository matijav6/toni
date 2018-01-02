<?php

use Illuminate\Database\Seeder;

class OfficesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offices')->insert([
            'address' => 'Kralja Tomislava 90, Belica',
        ]);

        DB::table('offices')->insert([
            'address' => 'Zrinskih 3b, Orehovica',
        ]);
    }
}
