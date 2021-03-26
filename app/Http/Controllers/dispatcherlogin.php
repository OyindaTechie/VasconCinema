<?php

namespace App\Http\Controllers;

use App\dispatch_riders;
use Illuminate\Http\Request;

class dispatcherlogin extends Controller
{
    public function Login( Request $request){

        /*  $request -> validate([
              'phone_no' => ['required', 'phone_number']
              ]); */
              
              $username = dispatch_riders::where('phone_number',$request->phone_no)->exists();
  
             // $user = User::where('email',$request->email)->first();
             return "successful";
          
              
          if(!$username){
             

            $register = new dispatch_riders();
        $register->phone_number = $request->phone_number;
        $register->save();
        return "successful";
              
              
          }

}

}
