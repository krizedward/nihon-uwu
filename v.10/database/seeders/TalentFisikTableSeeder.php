<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TalentFisik;

class TalentFisikTableSeeder extends Seeder
{
    /**
     * Next Step.
     * DatabaseSeeder = TalentFisikTableSeeder::class,
     * Happy Coding :)
     */
    public function run()
    {
        //
        TalentFisik::create([
            'talent_id' => 1,
        ]);
    }
}
