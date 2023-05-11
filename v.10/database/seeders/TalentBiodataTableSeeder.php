<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TalentBiodata;

class TalentBiodataTableSeeder extends Seeder
{
    /**
     * Next Step.
     * DatabaseSeeder = TalentBiodataTableSeeder::class,
     * php artisan db:seed --class=TalentBiodataTableSeeder
     * Happy Coding :)
     */
    public function run()
    {
        //
        TalentBiodata::create([
            'talent_id' => 1,
        ]);
    }
}
