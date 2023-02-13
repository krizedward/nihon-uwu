<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    protected $table = 'talent';

    protected $fillable = [
        'user_id',
        'id_account',
        'nickname',
        'photo_profile',
        'intro_voice',
        'rating',
        'number_wa',
        'short_description',
        'status',
        
    ];

    public function talent_bio()
    {
        return $this->hasOne('App\Models\talentBio', 'talent_id');
    }

    public function getTalentActive()
    {
        return $this->where('status', 'active');
    }
}
