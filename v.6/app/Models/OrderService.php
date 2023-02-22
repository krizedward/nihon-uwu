<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderService extends Model
{
    //
    protected $table = 'order_service';

    protected $primaryKey = 'id';

    protected $fillable = [
        // 'service',
        // 'start_service',
        // 'end_service',
        // 'proof_of_transfer',
        // 'client_name',
        // 'price_service',
        // 'talent_fee',
        // 'admin_fee',
        // 'status',
    ];
}
