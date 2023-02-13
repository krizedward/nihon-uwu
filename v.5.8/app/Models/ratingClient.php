<?php

namespace App\Models;

use App\Models\rentService;
use Illuminate\Database\Eloquent\Model;

class ratingClient extends Model
{
    //
    protected $table = 'rating_client';

    protected $fillable = [
        'rent_id',
        'client_id',
        'rating_point',
        'description_rating',
    ];

    public function rent()
    {
        return $this->belongsTo(rentService::class);
    }
}
