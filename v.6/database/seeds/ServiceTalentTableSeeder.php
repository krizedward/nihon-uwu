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
        ServiceTalent::create([
            'service_id' => 'service_id',
            'service_sort' => 'service_sort',
            'service_kind' => 'service_kind',
            'service_name' => 'service_name',
            'duration' => 'duration',
            'price_service' => 50000,
            'description' => 'description',
            'point' => 'point',
        ]);
    }
}
