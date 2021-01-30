<?php

namespace App\Models\perguruanTinggi;

use Illuminate\Database\Eloquent\Model;

class PerguruanTinggi extends Model
{
    protected $primaryKey = 'id';
    protected $connection = 'DATA_PERGURUAN_TINGGI';
    protected $table = 'perguruan_tinggi';
    protected $fillable = [
        'kode_perguruan_tinggi',
        'perguruan_tinggi',
        'alias',
        'description',
        'visi',
        'misi',
        'logo',
        'tanggal_berdiri',
        'tanggal_sk_pendirian_perguruan_tinggi',
        'nomor_sk_pendirian_perguruan_tinggi',
        'kode_akreditas',
        'kota',
        'provinsi',
        'kelurahan',
        'kecamatan',
        'kode_pos',
        'alamat',
        'website',
        'no_telp',
        'email',
        'fax',
    ];

}
