<?php

namespace App\Models\fakultas;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $primaryKey = 'id';
    protected $connection = 'DATA_FAKULTAS';
    protected $table = 'fakultas';
    protected $guard = [];

}
