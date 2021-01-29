<?php

namespace App\Http\Controllers\dosen;

use App\Http\Controllers\Controller;
use App\Models\BimbinganProposal;
use Exception;
use Illuminate\Support\Facades\DB;

class BimbinganProposalController extends Controller
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

        $results = BimbinganProposal::latest()->get();

        if (!$results) {
            return response()->json(['response' => 404]);
        }
        return response()->json(['service_name' => 'baak', 'body' => $results,  'response' => 200]);
    }

    public function show($id)
    {

        $result = BimbinganProposal::find($id);

        if (!$result) {
            return response()->json(['response' => 404]);
        }
        
        return response()->json(['service_name' => 'baak', 'body' => $result,  'response' => 200]);
    }

    public function store()
    {
        
        DB::connection($this->connection)->beginTransaction();
        try {
            BimbinganProposal::create(request()->all());
            DB::connection($this->connection)->commit();
            return response()->json(['response' => 200]);
        } catch (Exception $e) {
            DB::connection($this->connection)->rollback();
            return response()->json(['response' => 301]);
        }
    }

    public function update($id)
    {
        $exec = BimbinganProposal::find($id);

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
        $exec = BimbinganProposal::find($id);

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
