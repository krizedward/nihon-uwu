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
            'service_id' => 'null',
            'talent_id' => 'null',
            'service_name' => 'null',
            'service_price' => 'null',
            'qty' => 'null',
            'subtotal' => 'null',
        ]);
    }
}
