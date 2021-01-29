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
            Model::create(request()->all());
            DB::connection($this->connection)->commit();
            return response()->json(['response' => 200]);
        } catch (Exception $e) {
            DB::connection($this->connection)->rollback();
            return response()->json(['response' => 301]);
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
            return response()->json(['response' => 404]);
        }

        DB::connection($this->connection)->beginTransaction();
        try {
            $exec->delete();
          
            DB::connection($this->connection)->commit();
            return response()->json(['response' => 200]);
        } catch (Exception $e) {
            DB::connection($this->connection)->rollback();
            return response()->json(['response' => 301]);
        }   
    }
}
