<?php

namespace App\Models\yayasan;

use Illuminate\Database\Eloquent\Model ;

class Yayasan extends Model
{
    protected $primaryKey = 'id';
    protected $connection = 'DATA_YAYASAN';
    protected $table = 'yayasan';
    protected $fillable = [
        "kode_yayasan",
        "nama_yayasan",
        "alias",
        "description",
        "visi",
        "misi",
        "logo",
        "tanggal_berdiri",
        "tanggal_sk_pendirian_yayasan",
        "nomor_sk_pendirian_yayasan",
        "service_baak_id_berkas_yayasan",
        "kota",
        "provinsi",
        "kelurahan",
        "kecamatan",
        "kode_pos",
        "alamat",
        "website",
        "no_telp",
        "email",
        "fax",
    ];
}
