<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class talentBio extends Model
{
    protected $table = 'talent_bio';

    protected $fillable = [
        'talent_id',
        'sosmed_ig',
        'address',
        'height',
        'bank_account',
        'bank_name',
    ];
}
