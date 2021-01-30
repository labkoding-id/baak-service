<?php

namespace App\Models\yayasan;

use Illuminate\Database\Eloquent\Model ;

class Yayasan extends Model
{
    protected $primaryKey = 'id';
    protected $connection = 'DATA_YAYASAN';
    protected $table = 'yayasan';
    protected $guard = [];

}
