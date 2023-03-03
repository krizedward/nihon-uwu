<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Talent;

class OrderTemp extends Model
{
    //
    protected $table = 'order_temp';

    protected $primaryKey = 'id';

    protected $fillable = [
        'client_id',
        'talent_id',
        'price_service',
        'qty_service',
        'start_service',
        'end_service',
        'subtotal_service',
    ];

    public function talent()
    {
        // has many problem
        return $this->belongsTo('App\Models\Talent','talent_id','id');
    }
}
