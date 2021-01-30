<?php

namespace App\Models\fakultas;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $primaryKey = 'id';
    protected $connection = 'DATA_FAKULTAS';
    protected $table = 'fakultas';
    protected $fillable = [
        'kode_fakultas',
        'fakultas',
        'alias',
        'description',
        'visi',
        'misi',
        'logo',
        'tanggal_berdiri',
        'tanggal_sk_pendirian',
        'nomor_sk_pendirian',
    ];

}
