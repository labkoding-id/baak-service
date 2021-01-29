<?php

namespace App\Http\Controllers\dosen;

use App\Http\Controllers\Controller;
use App\Models\PenasehatAkademik;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenasehatAkademikController extends Controller
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

        $results = PenasehatAkademik::latest()->get();

        if (!$results) {
            return response()->json(['response' => 404]);
        }
        return response()->json(['service_name' => 'baak', 'body' => $results,  'response' => 200]);
    }

    public function show($id)
    {

        $result = PenasehatAkademik::find($id);

        if (!$result) {
            return response()->json(['response' => 404]);
        }
        
        return response()->json(['service_name' => 'baak', 'body' => $result,  'response' => 200]);
    }

    public function store()
    {
        
        DB::connection($this->connection)->beginTransaction();
        try {
            PenasehatAkademik::create(request()->all());
            DB::connection($this->connection)->commit();
            return response()->json(['response' => 200]);
        } catch (Exception $e) {
            DB::connection($this->connection)->rollback();
            return response()->json(['response' => 301]);
        }
    }

    public function update($id)
    {
        $exec = PenasehatAkademik::find($id);

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
        $exec = PenasehatAkademik::find($id);

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
