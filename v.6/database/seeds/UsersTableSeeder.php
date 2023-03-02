<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'joy',
            'email' => 'joy@admin.com',
            'email_verified_at'  => '2023-01-01',
            'password' => '$2y$10$HRxBtLp4z0mvHcQm.WbcV.lcbgpmJVwZbNT0xYa8EPweK.ZXovDcG',
            'role' => 'talent',
        ]);
    }
}
