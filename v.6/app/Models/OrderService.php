<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderService extends Model
{
    //
    protected $table = 'order_service';

    protected $primaryKey = 'id';

    protected $fillable = [
        'invoice',
        'start_service',
        'end_service',
        'total_payment',
        'status_order',
    ];
}
