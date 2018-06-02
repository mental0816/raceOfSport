<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Gym;
use Illuminate\Support\Facades\DB;


class gymController extends BaseController
{
    public function create(Request $request){
        $gym = Gym::create($request->all());
        return response()->json($gym, 201);
    }

    public function showAll(){
        return response()->json(Gym::all(), 200);
    }

    public function availableGym(){
        for($i = 0; $i<255;$i++){
            if(DB::table('gyms')->where('id', $i)->value('gymAvailable') == '1'){
                echo DB::table('gyms')->where('id', $i)->get();
            }
        }
    }
}
