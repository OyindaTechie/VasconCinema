<?php

namespace Modules\Showtimes\Http\Controllers;



use App\Repositories\Interfaces\showtimeRepositoryInterface;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class ShowtimesController extends Controller

    {
        private $showtimeRepository;
    
        public function __construct(showtimeRepositoryInterface $showtimeRepository)
        {
            $this->showtimeRepository = $showtimeRepository;
            $this->middleware('authadminverified')->only(['create']);
        }
    
     //this function return all movies showtimes
        public function index()
        {
            

          $allmovies =  $this->showtimeRepository->all();
            return response($allmovies, 200);
            

        }

        
  //this function create movies showtimes
        public function create(Request $request)
        {
           
        
            
             $this->showtimeRepository->createShowtime($request);
            return response()->json([
                "message" => "showtime added successfully"
            ], 201); 
    
     

        }

        
    //this function return all showtimes belonging to a movie
        public function read($movie_id)
        {
           
            
            
            $showtimemovies = $this->showtimeRepository->getShowtimeToaMovie($movie_id);
            return response( $showtimemovies,200);
    
            

        }

        //this function update showtimes
        public function update(Request $request, $id)
        {
           
            
            $this->showtimeRepository->updateShowtime($request,$id);
            return response()->json([
                "message" => "showtime updated successfully"
            ], 201); 
    
        }
  
    }

