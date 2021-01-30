<?php

namespace App\Models\programStudi;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    protected $primaryKey = 'id';
    protected $connection = 'DATA_PROGRAM_STUDI';
    protected $table = 'program_studi';
    protected $fillable = [
        'kode_perguruan_tinggi',
        'kode_fakultas',
        'kode_program_studi',
        'program_studi',
        'description',
        'visi',
        'misi',
        'jenjang',
        'gelar',
        'logo',
        'tanggal_berdiri',
        'tanggal_sk_pendirian',
        'nomor_sk_pendirian',
        'akreditas',
        'website',
        'no_telp',
        'email',
        'fax',
    ];
}
