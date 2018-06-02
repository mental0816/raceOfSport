<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class userController extends BaseController
{
    public function create(Request $request){
        $user = User::create($request->all());
        return response()->json($user, 201);
    }
    public function login(Request $request){
        $user_id = $request->input('user_id');
        $user_pwd = $request->input('user_password');
        $auth = 0;
        for($i = 0;$i<255;$i++){
            if(DB::table('users')->where('id', $i)->value('user_id')==$user_id && DB::table('users')->where('id', $i)->value('user_password')==$user_pwd){
                $auth = 1;
            }
        }
        if($auth == '1'){
            echo "로그인 되었습니다.";
        }
        else{
            echo "로그인 실패하였습니다.";
        }
    
    }    
}
