<?php

namespace App\Http\Controllers\matakuliah;

use App\Http\Controllers\Controller;
use App\Models\MataKuliah as Model;
use Exception;
use Illuminate\Support\Facades\DB;

class MatakuliahController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->connection = 'DATA_DOSEN';
        $this->db_name = env('DB_BAAK_MATAKULIAH');
    }

    public function all()
    {

        $results = Model::latest()->get();

        if (!$results) {
            return response()->json(['response' => 404]);
        }
        return response()->json(['service_name' => 'baak', 'body' => $results,  'response' => 200]);
    }

    public function show($id)
    {

        $result = Model::find($id);

        if (!$result) {
            return response()->json(['response' => 404]);
        }
        
        return response()->json(['service_name' => 'baak', 'body' => $result,  'response' => 200]);
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
            return response()->json(['response' => 404]);
        }

        DB::connection($this->connection)->beginTransaction();
        try {
            $exec->update(request()->all());
          
            DB::connection($this->connection)->commit();
            return response()->json(['response' => 200]);
        } catch (Exception $e) {
            DB::connection($this->connection)->rollback();
            return response()->json(['response' => 301]);
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
