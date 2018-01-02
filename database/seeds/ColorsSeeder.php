<?php

use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            'color_name' => 'Bijela',
        ]);

        DB::table('colors')->insert([
            'color_name' => 'Žuta',        
        ]);
        DB::table('colors')->insert([
            'color_name' => 'Crvena',        
        ]);
        DB::table('colors')->insert([
            'color_name' => 'Rozna',        
        ]);
        DB::table('colors')->insert([
            'color_name' => 'Ljuničasta',        
        ]);
        DB::table('colors')->insert([
            'color_name' => 'Zlatna',        
        ]);
        DB::table('colors')->insert([
            'color_name' => 'Plava',        
        ]);
    }
}
