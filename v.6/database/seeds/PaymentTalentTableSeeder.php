<?php

use Illuminate\Database\Seeder;
use App\Models\PaymentTalent;

class PaymentTalentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PaymentTalent::create([
            'service' => 'service',
            'start_service' => 'start_service',
            'end_service' => 'end_service',
            'proof_of_transfer' => 'proof_of_transfer',
            'client_name' => 'client_name',
            'price_service' => 4000,
            'talent_fee' => 40000,
            'admin_fee' => 50000,
            'status' => 'status',
        ]);
    }
}
