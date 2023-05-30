<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){


    
        $this->validateLogin($request);
        //validacion 
        if(Auth::attempt($request->only('email','password'))){
            return response()->json([
                'token'=>$request->user()->createToken($request->name)->plainText,
                'message'=>'success'
            ]);
        }
        return response()->json([
            'message'=>'successs'
        ]);
        
        }
        return response 
}


