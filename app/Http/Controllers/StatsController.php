<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use DB;
use App\Models\Stat;
class StatsController extends Controller
{

     public function create(Request $request){
           
        $stats = new Stat();

        $stats->integra2_positive=$request->integra2_positive;
        $stats->integra2_negative=$request->integra2_negative;
        $stats->save();
 
        return response()->json(['mensaje'=> 'Actualizado']);
     }



    public function integrapositive(Request $request)
    {
        $insert = DB::table('stats')
              ->insert(['integra2_positive' => 1,'integra2_negative' => 0,'updated_at'=>\Carbon\Carbon::now(),'created_at'=>\Carbon\Carbon::now()]);
        return "Gracias por tu respuesta";        
    }
   public function integranegative(Request $request)
    {
      
        $insert = DB::table('stats')
              ->insert(['integra2_positive' => 0,'integra2_negative' => 1,'updated_at'=>\Carbon\Carbon::now(),'created_at'=>\Carbon\Carbon::now()]);
       return "Gracias por tu respuesta";       
    }
}
