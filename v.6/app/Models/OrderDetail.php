<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //
    protected $table = 'order_detail';

    protected $primaryKey = 'id';

    protected $fillable = [
        'invoice',
        'order_id',
        'servicetalent_id',
        'client_id',
        'talent_id',
        'price_service',
        'qty_service',
        'start_service',
        'end_service',
        'subtotal_service',
        'status_service',
    ];

    public function orderService()
    {
        // has many problem
        return $this->belongsTo('App\Models\OrderService','invoice','id');
    }

    public function talent()
    {
        // has many problem
        return $this->belongsTo('App\Models\Talent','talent_id','id');
    }

    public function client()
    {
        // has many problem
        return $this->belongsTo('App\Models\Client','client_id','id');
    }

    public function serviceTalent()
    {
        // has many problem
        return $this->belongsTo('App\Models\ServiceTalent','servicetalent_id','id');
    }
}
