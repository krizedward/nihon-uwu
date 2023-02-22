<?php

use Illuminate\Database\Seeder;
use App\Models\ServiceTalent;

class ServiceTalentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ServiceTalent::insert([
            [
                'service_id' => 'SR11',
                'service_name' => 'Chatting',
                'duration' => '8 Jam',
                'price_service' => 50000,
                'description' => 'term and condition',
                'point' => 0,
            ], [
                'service_id' => 'SR12',
                'service_name' => 'Chatting',
                'duration' => '3 Hari',
                'price_service' => 100000,
                'description' => 'term and condition',
                'point' => 0,
            ], [
                'service_id' => 'SR13',
                'service_name' => 'Chatting',
                'duration' => '7 Hari',
                'price_service' => 150000,
                'description' => 'term and condition',
                'point' => 0,
            ], [
                'service_id' => 'SR14',
                'service_name' => 'Calls',
                'duration' => '30 Hari',
                'price_service' => 700000,
                'description' => 'term and condition',
                'point' => 0,
            ],
        ]);

        $datas = array(
            array(
                'service_id' => 'SR15',
                'service_kind' => 'Additional Service',
                'service_name' => 'Calls',
                'duration' => '30 Menit',
                'price_service' => 40000,
                'description' => 'term and condition',
                'point' => 0,
            ),

            array(
                'service_id' => 'SR16',
                'service_kind' => 'Additional Service',
                'service_name' => 'Calls',
                'duration' => '60 Menit',
                'price_service' => 60000,
                'description' => 'term and condition',
                'point' => 0,
            ),

            array(
                'service_id' => 'SR17',
                'service_kind' => 'Additional Service',
                'service_name' => 'Video Calls',
                'duration' => '30 Menit',
                'price_service' => 55000,
                'description' => 'term and condition',
                'point' => 0,
            ),

            array(
                'service_id' => 'SR18',
                'service_kind' => 'Additional Service',
                'service_name' => 'Video Calls',
                'duration' => '60 Menit',
                'price_service' => 75000,
                'description' => 'term and condition',
                'point' => 0,
            )

        );

        foreach ($datas as $data) {
            ServiceTalent::create([
                'service_id' => $data['service_id'],
                'service_kind' => $data['service_kind'],
                'service_name' => $data['service_name'],
                'duration' => $data['duration'],
                'price_service' => $data['price_service'],
                'description' => $data['description'],
                'point' => $data['point'],
            ]);
        }
    }
}
