<?php

namespace App\Models;

use App\Models\rentService;
use Illuminate\Database\Eloquent\Model;

class ratingTalent extends Model
{
    protected $table = 'rating_talent';

    protected $fillable = [
        'rent_id',
        'talent_id',
        'rating_point',
        'description_rating',
    ];

    public function rent()
    {
        return $this->belongsTo(rentService::class);
    }
}
