<?php

namespace App\Http\Controllers;

use App\Fabric;
//use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRequestFabric extends Controller
{
    //
    public function __construct()
    {
        /* $this->middleware('authadminverified')->except(['getAllStudents', 'getStudent', 'deleteStudent', 'createStudent']);
        $this->middleware('authadminverified')->only(['updateStudent']);  */
      
        // $this->middleware('auth:api')->only(['createStudent']);
       
       $this->middleware('authfabricrequest')->only(['RequestFabric']);
    }

    public function RequestFabric(Request $request){
     


        //$userphone = new userlogin();
       // $UserPhoneno = $userphone->Login->$username;
        $fabric = new Fabric();
        $fabric->NoofFabrics = $request->nooffabrics;
        $fabric->FabricType = $request->FabricType;
        $fabric->Location = $request->Location;
        $fabric->UserPhoneno = Auth::guard('api')->user()->phone_number;
        $fabric->save();

        return response()->json([
            "message" => " Request sent to a dispatcher"
        ], 201); 

    }
}
