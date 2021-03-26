<?php

namespace App\Repositories;
 use Faker\Factory;
 use App\User;

use Modules\Movies\Entities\Movie;
use App\Repositories\Interfaces\movieRepositoryInterface;
use Carbon\Carbon;
use Modules\Cinema\Entities\Cinema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class movieRepository implements movieRepositoryInterface
{

    // this function return all movies in the three cinema
    public function all()
    {
       
       $allcinemas = Cinema::all();
       $cinema1 = $allcinemas[0];
       $cinema2 = $allcinemas[1];
       $cinema3 = $allcinemas[2];

      $cinema1movie = $cinema1->movie;
      $cinema2movie = $cinema2->movie;
      $cinema3movie = $cinema3->movie;
       
      return response()->json([
          'cinema1'=> $cinema1movie,'cinema2'=> $cinema2movie,'cinema3'=> $cinema3movie,
     ], 200);

    }

    // this function return all movies belonging to a cinema
    public function getMovie($cinema_id){
     
      $findcinema = Cinema::find($cinema_id);
       $findcinemamovies = $findcinema->movie;
      return  $findcinemamovies;
    } 


  // this function create movies in a cinema
    public function createMovie(Request $request){

        $faker = Factory::create();
 
         Movie::create([
            'movie_title' => $request->movie_title,
            'movie_img_url' => Storage::put('public/movieimages', $request->img),
            'showtime_id' => $request->showtime_id,
            
            'cinema_id' =>  $request->cinema_id,
            'id' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        ]); 

     
}



// this function allow authentication before adding movies and showtimes
public function logincinema(Request $request){

  
		$cinema = Cinema::where('email',$request->email)->first();
		
	if(!$cinema){
		
		return "admin not found";
		
	}

	if( !Hash::check($request->password,$cinema->password )){
		
		return "password does not match";
		
	}
   
   $tokenResult = $cinema->createToken('Personal Access Token');
   $token = $tokenResult->token;
 
       $token->expires_at = Carbon::now()->addDays(1);
       
   $token->save();
   return response()->json([
       'access_token' => $tokenResult->accessToken,
       'token_type' => 'Bearer',
       'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
    
     'user' => $cinema,
     'tokenResult' => $tokenResult
   ]); 
}

}