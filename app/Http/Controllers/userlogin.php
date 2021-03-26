<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class userlogin extends Controller
{
    //

    public function Login( Request $request){

        /*  $request -> validate([
              'phone_no' => ['required', 'phone_number']
              ]); */

              
              $username = User::where('phone_number',$request->phone_number)->first();
             

              if($username){

                $tokenResult = $username->createToken('Personal Access Token');
    $token = $tokenResult->token;
  
        $token->expires_at = Carbon::now()->addDays(1);
        //    Passport::personalAccessTokensExpireIn(Carbon::now()->addMinute(1));
        // Passport::refreshTokensExpireIn(Carbon::now()->addMinutes(1));
    $token->save();
    return response()->json([
        'access_token' => $tokenResult->accessToken,
        'token_type' => 'Bearer',
        'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
        // 'admin' => Auth::guard('adminapi')->user()
		'user' => $username,
		'tokenResult' => $tokenResult
    ]);
              }
  
             // $user = User::where('email',$request->email)->first();
           
          
              
          else{
             

            $register = new User();
        $register->phone_number = $request->phone_number;
        $register->save();
        
        $tokenResult = $register->createToken('Personal Access Token');
        $token = $tokenResult->token;
      
            $token->expires_at = Carbon::now()->addDays(1);
            //    Passport::personalAccessTokensExpireIn(Carbon::now()->addMinute(1));
            // Passport::refreshTokensExpireIn(Carbon::now()->addMinutes(1));
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
            // 'admin' => Auth::guard('adminapi')->user()
            'user' => $username,
            'tokenResult' => $tokenResult
        ]);
              
              
          }

}


public function authuser( ){

    
    return 'value';
    
 }
}
