<?php

namespace App\Models;

use App\Models\rentService;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';

    protected $fillable = [
        'rent_id',
        'payment_date',
        'total_amount',
        'methode_payment',
        'upload_receipt',
    ];

    public function rent()
    {
        return $this->belongsTo(rentService::class);
    }
}
