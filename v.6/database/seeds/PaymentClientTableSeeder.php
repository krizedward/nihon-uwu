<?php

use Illuminate\Database\Seeder;
use App\Models\PaymentClient;

class PaymentClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PaymentClient::create([
            'client_id' => 1,
            'username_client' => 'edward',
            'nama_client' => 'Edward Lengkap',
        ]);
    }
}
