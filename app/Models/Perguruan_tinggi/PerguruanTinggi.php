<?php

namespace App\Models\Perguruan_tinggi;

use Illuminate\Database\Eloquent\Model;

class PerguruanTinggi extends Model
{
    protected $primaryKey = 'id';
    protected $connection = 'DATA_PERGURUAN_TINGGI';
    protected $table = 'perguruan_tinggi';
    protected $guard = [];

}
