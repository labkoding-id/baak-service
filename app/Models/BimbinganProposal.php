<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BimbinganProposal extends Model
{
    protected $primaryKey = 'id';
    protected $connection = 'DATA_DOSEN';
    protected $table = 'penasehat_akademik';
    protected $fillable = [
        'nidn','nim','tahun_akademik'];

}
