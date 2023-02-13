<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dayOffTalent extends Model
{
    use SoftDeletes;
    //
    protected $table = 'day_off_talent';

    // untuk hapus
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'talent_id',
        'day_off',
    ];

    public function getTalent($id)
    {
        // return $this->where('b', 15)->lists('a')->all();
        return $this->where('talent_id', $id)->pluck('day_off')->toArray();
    }
}
