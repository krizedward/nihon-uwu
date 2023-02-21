<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceTalent extends Model
{
    //
    protected $table = 'service_talent';

    protected $primaryKey = 'id';

    protected $fillable = [
        'service_id',
        'service_sort',
        'service_kind',
        'service_name',
        'duration',
        'price_service',
        'description',
        'point',
    ];
}
