<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success; 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 

class UserAuthController extends Controller
{
    function signup(Request $request){

        $input = $request->all();
       $input["password"] = Hash::make($input["password"]); 
         $user = User::create($input);
        $success['token'] = $user->createToken('myapp')->plainTextToken;
        $success['name'] = $user->name;  
        return response()->json([
            'success' => true,
            'result' => $success,
            'msg' => 'user register succesfully' 
        ]);
    }



    function login(Request $request){
     
        // return $request->all();
        $user = User::where('email',$request->email)->first();

        if(!$user|| !Hash::check($request->password,$user->password)){
            return['return'=>"user not found","sucess"=> false];
        }
       
         $success['token'] = $user->createToken('myapp')->plainTextToken;
        
      
        $success['name'] = $user->name; 

        return response()->json([
            'success' => true,
            'result' => $success,
            'msg' => 'user register succesfully' 
        ]);
    }
}

