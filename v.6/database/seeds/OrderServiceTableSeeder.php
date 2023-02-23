<?php

use Illuminate\Database\Seeder;
use App\Models\OrderService;

class OrderServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        OrderService::create([
            'client_id' => 'null',
            'invoice' => 'null',
            'total_price' => 'null',
            'pay' => 'null',
            'note' => 'null',
        ]);
    }
}
