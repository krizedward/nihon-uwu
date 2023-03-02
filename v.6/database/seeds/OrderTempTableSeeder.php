<?php

use Illuminate\Database\Seeder;
use App\Models\OrderTemp;

class OrderTempTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        OrderTemp::create([
            // 'service_id' => 'null',
            // 'talent_id' => 'null',
            // 'service_name' => 'null',
            // 'service_price' => 'null',
            // 'qty' => 'null',
            // 'subtotal' => 'null',

            // 'client_id' => 'null',
            // 'talent_id'  => 'null',
            // 'price_service' => 0,
            // 'qty_service' => 0,
            // 'start_service' => '2023-01-02',
            // 'end_service' => '2023-01-02',
            // 'subtotal_service' => 0,
        ]);
    }
}
