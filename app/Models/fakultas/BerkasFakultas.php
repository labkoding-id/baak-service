<?php

namespace App\Models\fakultas;

use Illuminate\Database\Eloquent\Model;

class BerkasFakultas extends Model
{
    protected $primaryKey = 'id';
    protected $connection = 'DATA_FAKULTAS';
    protected $table = 'berkas_fakultas';
    protected $fillable = [
        'kode_berkas',
        'nama_berkas',
        'url_berkas',
        'keterangan',
        'kode_fakultas',
    ];
}
