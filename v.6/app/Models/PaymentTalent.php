<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentTalent extends Model
{
    //
    protected $table = 'payment_talent';

    protected $primaryKey = 'id';

    protected $fillable = [
        'paytalent_code',
        'talent_name',
        'service',
        'start_service',
        'end_service',
        'proof_of_transfer',
        'client_name',
        'price_service',
        'talent_fee',
        'admin_fee',
        'status',
    ];
}
