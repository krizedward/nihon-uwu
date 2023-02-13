<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Talent;
use App\Models\serviceTalent;
use Illuminate\Database\Eloquent\Model;

class rentService extends Model
{
    protected $table = 'rent_service';

    protected $fillable = [
        'client_id',
        'servicetalent_id',
        'talent_id',
        'numberdays',
        'start_date',
        'end_date',
    ];

    // entitas antar class

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
