<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasFactory;

    /**
     * Next Step.
     * php artisan make:seeder TalentTableSeeder
     * php artisan db:seed --class=TalentTableSeeder
     * Happy Coding :)
     */

    protected $primaryKey = 'id';
    protected $table = 'talent';

    protected $fillable = [
        'user_id',
        'kategori_talent_id',
        'kode_id',
        'kode_nomor',
        'nickname',
        'slug',
        'status',
    ];
}
