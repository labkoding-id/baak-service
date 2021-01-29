<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PenasehatAkademik extends Model 
{
    protected $primaryKey = 'id';
    protected $connection = 'DATA_DOSEN';
    protected $table = 'penasehat_akademik';
    protected $fillable = [
        'nidn','nim','tahun_akademik'
    ];

}
