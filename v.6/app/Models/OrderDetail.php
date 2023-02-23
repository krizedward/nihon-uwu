<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //
    protected $table = 'order_detail';

    protected $primaryKey = 'id';

    protected $fillable = [
        'order_id',
        'service_id',
        'service_name',
        'service_price',
        'qty',
        'subtotal',
    ];
}
