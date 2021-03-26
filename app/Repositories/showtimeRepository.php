<?php

namespace App\Repositories;
 use Faker\Factory;

use Modules\Movies\Entities\Movie;
use Modules\Showtimes\Entities\Showtime;
use App\Repositories\Interfaces\showtimeRepositoryInterface;
use Illuminate\Http\Request;


class showtimeRepository implements showtimeRepositoryInterface
{

    //this function return all movies showtimes
    public function all()
    {
     
       return Showtime::all();
    }

    //this function return all showtimes belonging to a movie
    public function getShowtimeToaMovie($movie_id){
       
       $findmovie = Movie::find($movie_id);
       $findmovieshowtimes = $findmovie->showtime;
      return   $findmovieshowtimes;
    }


  //this function create movies showtimes
    public function createShowtime(Request $request){

        $faker = Factory::create();
 
         Showtime::create([
            'movie_id' => $request->movie_id,
            'showdate' => $request->showdate,
            
            'showtime' => $request->showtime,
            
            'cinema_id' => $request->cinema_id,
            'id' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        ]); 
  
        
}

//this function update showtimes
public function updateShowtime(Request $request, $id){

    Showtime::where('id',$id)->update(['movie_id' => $request->movie_id,'cinema_id' => $request->cinema_id]);

    
}

}