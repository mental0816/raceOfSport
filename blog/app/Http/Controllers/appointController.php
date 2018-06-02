<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Gym;
use App\Appointment;

class appointController extends BaseController
{
    public function create(Request $request){
        $gymID = $request->input('gymId');
        $gymAvailable = $request->input('gymAvailable');
        $gym = Gym::findOrFail($gymID);
        $gym->update(['gymAvailable'=>0]);
        $appoint = Appointment::create($request->all());
        return response()->json($appoint, 201);
    }

    public function showAll(){
        return response()->json(Appointment::all(), 200);
    }
}

#php -S localhost:8000 -t public