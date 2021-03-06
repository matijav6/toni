<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(ColorsSeeder::class);
        $this->call(SuppliersSeeder::class);
        $this->call(OfficesSeeder::class);
        $this->call(FlowersSeeder::class);
        $this->call(FlowersAndSupliersSeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(OrderDeliveriesSeeder::class);
        $this->call(OrderFlowersSeeder::class);
    }
}