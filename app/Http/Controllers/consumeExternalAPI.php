<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class consumeExternalAPI extends Controller
{
    //

    public function verifytransaction($transactionId){

        $client = new \GuzzleHttp\Client();

        $secretkey = 'sk_test_5143dcc230337c8503fac2972c6ca11406029955';

        $url = "https://api.paystack.co/transaction/verify/".$transactionId;
    
    
    
        // $myBody['name'] = "Demo";
    
        // $request = $client->post($url,  ['body'=>$myBody]);
    
        // $response = $request->send();
    
    
    
        // dd($response);

        $headers = [
            'Authorization' => 'Bearer sk_test_5143dcc230337c8503fac2972c6ca11406029955',
            'Content-Type' => 'application/json'
           
                ];

    

        $response = $client->request('get', $url, ['headers' => $headers]);
        $responseJSON = json_decode($response->getBody(), true);

        return $responseJSON;


    }

    public function posttransaction(Request $request){


        $client = new \GuzzleHttp\Client();

        $url = "https://api.paystack.co/transaction/initialize";
    
    
    
        // $myBody['name'] = "Demo";
    
        // $request = $client->post($url,  ['body'=>$myBody]);
    
        // $response = $request->send();
    
    
    
        // dd($response);
        $headers = [
            'Authorization' => 'Bearer sk_test_5143dcc230337c8503fac2972c6ca11406029955',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
           
                ];

         $body = [
            'email' => $request->email,
            'amount'=> $request->amount
            
         ];

        $response = $client->request('post', $url, ['json' =>  $body, 'headers' => $headers]);
        $responseJSON = json_decode($response->getBody(), true);

        return $responseJSON;
    }
}
