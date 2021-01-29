<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $primaryKey = 'id';
    protected $connection = 'DATA_MATAKULIAH';
    protected $table = 'mata_kuliah';
    protected $guard = [];
}
