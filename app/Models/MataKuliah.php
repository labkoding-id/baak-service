<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $primaryKey = 'id';
    protected $connection = 'DATA_MATAKULIAH';
    protected $table = 'mata_kuliah';
    protected $fillable = [
        'id_universitas',
        'id_fakultas',
        'id_bahan_ajar',
        'id_jenjang',       
        'kode_matakuliah',
        'matakuliah',
        'tahun_akademik',
        'silabus',
        'semester',      
        'sks_matakuliah',      
        'sks_teori',      
        'sks_praktek',      
        'sks_lapangan',      
        'sks_max'   
    ];
}
