<?php

use Illuminate\Database\Seeder;

class FlowersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flowers')->insert([
            'flower_name' => 'Krizantema',
        ]);
        DB::table('flowers')->insert([
            'flower_name' => 'Špina',
        ]);
        DB::table('flowers')->insert([
            'flower_name' => 'Gerbera',
        ]);
        DB::table('flowers')->insert([
            'flower_name' => 'Ping-Pong',
        ]);
        DB::table('flowers')->insert([
            'flower_name' => 'Ruža',
        ]);
        DB::table('flowers')->insert([
            'flower_name' => 'Karanfil',
        ]);
        DB::table('flowers')->insert([
            'flower_name' => 'Margareta',
        ]);
        DB::table('flowers')->insert([
            'flower_name' => 'Ljiljan',
        ]);
        DB::table('flowers')->insert([
            'flower_name' => 'Anturijum',
        ]);
    }
}
