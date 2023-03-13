<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $table = 'client';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'id_account',
        'nickname',
        'photo_profile',
        'rating',
        'number_wa',
        'short_description',
        'status',
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'id');
    }
}
