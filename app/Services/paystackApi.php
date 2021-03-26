<?php

namespace App\Services;



class paystackApi 
{
    
    
    public static function paymentConfirmationverify (string $transactionId) {


        // I have Very Simple Solution of this problem. You can do this without any certificate file..
        
        // Go on Laravel Root Folder -> Vender -> guzzlehttp -> guzzle -> src
        
        // open Client.php
        
        
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

    public static function paymentConfirmation (string $transactionId) {


// I have Very Simple Solution of this problem. You can do this without any certificate file..

// Go on Laravel Root Folder -> Vender -> guzzlehttp -> guzzle -> src

// open Client.php


        $client = new \GuzzleHttp\Client();

        $url = "https://jsonplaceholder.typicode.com/posts";
    
    
    
        // $myBody['name'] = "Demo";
    
        // $request = $client->post($url,  ['body'=>$myBody]);
    
        // $response = $request->send();
    
    
    
        // dd($response);

        $headers = ['Content-Type' => 'application/json'];

         $body = [
            'title' => 'foo',
            'body'=> 'bar',
            'userId' => 1,
         ];

        $response = $client->post($url, $headers, ['json'=>$body]);
        $responseJSON = json_decode($response->getBody(), true);

        return $responseJSON;
     }
}

