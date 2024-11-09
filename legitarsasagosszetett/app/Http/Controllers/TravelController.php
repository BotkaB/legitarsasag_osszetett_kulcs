<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    
        public function index(){
            $travel = response()->json(Travel::all());
            return $travel;
        }
    
        public function show($flight_id, $user_id){
         

        $travel = Travel::where('flight_id', $flight_id)->where('user_id', $user_id)->get();
        return $travel[0];

        }
    
        public function store(Request $request){
            $travel= new Travel();
            $travel->fill($request->all());
            $travel->save();
        }
    
        public function update(Request $request, $flight_id, $user_id){
            $travel=$this->show($flight_id, $useer_id);
            $travel->fill($request->all());
            $travel->save();
        }
    
        public function destroy($flight_id, $user_id)
        {
            
            $travel=$this->show($flight_id, $user_id,)->delete();
        }
    
       
}
