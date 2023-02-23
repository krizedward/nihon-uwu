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
            'order_id' => 'null',
            'service_id' => 'null',
            'service_name' => 'null',
            'service_price' => 'null',
            'qty' => 'null',
            'subtotal' => 'null',
        ]);
    }
}
