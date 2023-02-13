<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Client extends Model
{
    protected $table = 'client';

    protected $fillable = [
        'user_id',
        'id_account',
        'nickname',
        'short_description',
        'birthdate',
        'upload_ktp',
        'status',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
