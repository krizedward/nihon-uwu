<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class serviceRental extends Model
{
    protected $table = 'service_rental';

    protected $fillable = [
        'client_id',
        'servicetalent_id',
        'talent_id',
        'date_dating',
        'time_dating',
        'status_payment',
        'status_dating',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function service_talent()
    {
        return $this->belongsTo('App\Models\serviceTalent', 'id');
    }

    public function talent()
    {
        return $this->belongsTo(Talent::class);
    }
}
