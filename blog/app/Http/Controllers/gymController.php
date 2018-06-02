<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Gym;

class gymController extends BaseController
{
    public function create(Request $request){
        $gym = Gym::create($request->all());
        return response()->json($gym, 201);
    }

    public function showAll(){
        return response()->json(Gym::all(), 200);
    }
}
