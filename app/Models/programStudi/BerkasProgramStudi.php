<?php

namespace App\Models\programStudi;

use Illuminate\Database\Eloquent\Model;

class BerkasProgramStudi extends Model
{
    protected $primaryKey = 'id';
    protected $connection = 'DATA_PROGRAM_STUDI';
    protected $table = 'berkas_program_studi';
    protected $fillable = [
        'kode_berkas_program_studi',
        'nama_berkas',
        'url_berkas',
        'keterangan',
        'kode_program_studi',
    ];
}
