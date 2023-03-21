<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentClient extends Model
{
    //
    protected $table = 'payment_client';

    protected $primaryKey = 'id';

    protected $fillable = [
        'kode_id',
        'kode_nomor',
        'order_id',
        'client_id',
        'username_client',
        'nama_client',
        'noresi_bayar',
        'namaterang_bayar',
        'tanggal_bayar',
        'bukti_bayar',
        'metode_bayar',
        'metodedetail_bayar',
        'status_bayar',
    ];

    public function client()
    {
        return $this->belongsTo('App\Models\Client', 'client_id','id'); //,'client_id','id'
    }

    public function orderService()
    {
        return $this->belongsTo('App\Models\OrderService', 'order_id','id'); //,'client_id','id'
    }
}
