<?php

namespace App\Repositories;
 use Faker\Factory;

use Modules\Cinema\Entities\Cinema;
use App\Repositories\Interfaces\cinemaRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class cinemaRepository implements cinemaRepositoryInterface
{

    //this function get all cinemas
    public function all()
    {
       
       return Cinema::all();
    }

  

  //this function create Cinema
    public function createCinema(Request $request){

        $faker = Factory::create();
  
        Cinema::create([
            'cinema_name' => $request->cinema_name,
            'location' => $request->location,
            'email' => $request->email,
            
            'password' =>  bcrypt($request->password),
            'id' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        ]); 

     

       
        
}


public function getCinema($cinemaid){

  $cinema = Cinema::find($cinemaid);
      
      $movies = Cinema::find($cinemaid)->movie;
      
      $showtime = Cinema::find($cinemaid)->showtime;



       
      return response()->json([
          'cinema'=> $cinema,'movies'=> $movies,'showtimes'=> $showtime,
     ], 200);
}


}