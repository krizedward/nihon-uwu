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
            // 'paytalent_code' => 'PT11',
            // 'kode_id' => 'PT11',
            // 'talent_name' => 'talent_name',
            // 'service' => 'service',
            // 'start_service' => 'start_service',
            // 'end_service' => 'end_service',
            // 'proof_of_transfer' => 'proof_of_transfer',
            // 'client_name' => 'client_name',
            // 'price_service' => 4000,
            // 'talent_fee' => 40000,
            // 'admin_fee' => 50000,
            // 'status' => 'status',

            'kode_id' => 'PT11',
            'kode_nomor' => '2202213',
            'order_id' => 1,
            'talent_nama' => 'Gwen',
            'client_nama' => 'Edward',
            'total_bayar' => 4000,
            'talent_fee' => 40000,
            'admin_fee' => 50000,
            'bukti_bayar' => 'text.jpg',
            'status_bayar'  => 'sukses'
        ]);
    }
}
