<?php

namespace App\Http\Controllers\perguruan_tinggi;

use App\Http\Controllers\Controller;
use App\Models\Perguruan_tinggi\PerguruanTinggi as Model;
use Exception;
use Illuminate\Support\Facades\DB;

class PerguruanTinggiController extends Controller
{
    public function __construct()
    {
        $this->connection = 'DATA_PERGURUAN_TINGGI';
        $this->db_name    = env("DB_BAAK_PERGURUAN_TINGGI");
    }

    public function all()
    {
        $results = Model::latest()->get();
        return $this->res($this->db_name, $results);
    }

    public function show($id)
    {

        $result = Model::find($id);

        return $this->res($this->db_name, $result);
    }

    public function store()
    {
        DB::connection($this->connection)->beginTransaction();
        try {
            $results = Model::create(request()->all());
            DB::connection($this->connection)->commit();
            return $this->res($this->db_name, $results);
        } catch (Exception $e) {
            DB::connection($this->connection)->rollback();
            return $this->res_error($this->db_name, $e->getMessage());
        }
    }

    public function update($id)
    {
        $exec = Model::find($id);

        if($exec === null){
            return $this->res($this->db_name);
        }

        DB::connection($this->connection)->beginTransaction();
        try {
            $results = $exec->update(request()->all());
            DB::connection($this->connection)->commit();
            return $this->res($this->db_name, $results);
        } catch (Exception $e) {
            DB::connection($this->connection)->rollback();
            return $this->res_error($this->db_name, $e->getMessage());
        }
        
    }

    
    public function delete($id)
    {
        $exec = Model::find($id);

        if($exec === null){
            return $this->res($this->db_name);
        }

        DB::connection($this->connection)->beginTransaction();
        try {
            $results = $exec->delete();
            DB::connection($this->connection)->commit();
            return $this->res($this->db_name, $results);
        } catch (Exception $e) {
            DB::connection($this->connection)->rollback();
            return $this->res_error($this->db_name, $e->getMessage());
        }   
    }

}
