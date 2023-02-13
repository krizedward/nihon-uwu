<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class serviceTalent extends Model
{
    protected $table = 'service_talent';

    protected $fillable = [
        'name_service',
        'price_service',
        'description',
    ];
}
