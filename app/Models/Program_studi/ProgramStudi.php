<?php

namespace App\Models\Program_studi;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    protected $primaryKey = 'id';
    protected $connection = 'DATA_PROGRAM_STUDI';
    protected $table = 'program_studi';
    protected $guard = [];
}
