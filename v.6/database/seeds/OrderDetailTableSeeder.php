<?php

use Illuminate\Database\Seeder;
use App\Models\OrderDetail;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        OrderDetail::create([
            // 'order_id' => 'null',
            // 'service_id' => 'null',
            // 'service_name' => 'null',
            // 'service_price' => 'null',
            // 'qty' => 'null',
            // 'subtotal' => 'null',

            // 'invoice' => 'null',
            // 'order_id' => 'null',
            // 'client_id' => 'null',
            // 'talent_id' => 'null',
            // 'price_service' => 0,
            // 'qty_service' => 0,
            // 'start_service' => '2023-01-01',
            // 'end_service' => '2023-01-01',
            // 'subtotal_service' => 0,
            // 'status_service' => 'null',
        ]);
    }
}
