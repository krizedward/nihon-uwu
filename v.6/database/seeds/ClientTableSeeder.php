<?php

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Client::create([
            'user_id' => 25,
            'id_account' => 230313,
            'nickname' => 'boy',
        ]);
        
    }
}
