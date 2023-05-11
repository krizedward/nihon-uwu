<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TalentSocialMedia;

class TalentSocialMediaTableSeeder extends Seeder
{
    /**
     * Next Step.
     * DatabaseSeeder = TalentSocialMediaTableSeeder::class,
     * php artisan db:seed --class=TalentSocialMediaTableSeeder
     * Happy Coding :)
     */
    public function run()
    {
        //
        TalentSocialMedia::create([
            'talent_id' => 1,
        ]);
    }
}
