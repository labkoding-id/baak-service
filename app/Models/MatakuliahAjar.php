<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliahAjar extends Model
{
    protected $primaryKey = 'id';
    protected $connection = 'DATA_MATAKULIAH';
    protected $table = 'mata_kuliah_ajar';
    protected $fillable = [
        'id_matakuliah',
        'nidn',
    ];
}
