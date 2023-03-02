<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    //
    protected $table = 'talent';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'id_account',
        'nickname',
        'photo_profile',
        'intro_voice',
        'rating',
        'number_wa',
        'short_description',
        'status',
    ];
}
