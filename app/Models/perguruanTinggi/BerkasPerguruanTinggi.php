<?php

namespace App\Models\perguruanTinggi;

use Illuminate\Database\Eloquent\Model;

class BerkasPerguruanTinggi extends Model
{
    protected $primaryKey = 'id';
    protected $connection = 'DATA_PERGURUAN_TINGGI';
    protected $table = 'berkas_perguruan_tinggi';
    protected $fillable = [
        'kode_berkas_perguruan_tinggi',
        'nama_berkas',
        'url_berkas',
        'keterangan',
        'kode_perguruan_tinggi',
        'tahun_akademik'
    ];

}
