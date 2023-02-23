<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderTemp extends Model
{
    //
    protected $table = 'order_temp';

    protected $primaryKey = 'id';

    protected $fillable = [
        'service_id',
        'talent_id',
        'service_name',
        'service_price',
        'qty',
        'subtotal',
    ];
}
