<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PaymentTalentTableSeeder::class);
        $this->call(ServiceTalentTableSeeder::class);
        $this->call(OrderDetailTableSeeder::class);
        $this->call(OrderServiceTableSeeder::class);
        $this->call(OrderTempTableSeeder::class);
    }
}
