<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class scheduleTalent extends Model
{
    protected $table = 'schedule_talent';

    public function cariTahun($time)
    {
        $data = Carbon::createFromFormat('Y-m-d H:i:s', $time)->year;
        return $data;
    }

    public function cariTanggal($time)
    {
        $data = Carbon::createFromFormat('Y-m-d H:i:s', $time)->day;
        return $data;
    }
}
