<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderService extends Model
{
    //
    protected $table = 'order_service';

    protected $primaryKey = 'id';

    protected $fillable = [
        'client_id',
        'invoice',
        'total_price',
        'pay',
        'note',
    ];
}
