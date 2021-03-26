<?php

namespace Modules\Movies\Http\Controllers;



use App\User;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Interfaces\movieRepositoryInterface;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;



class MoviesController extends Controller

    {
        private $movieRepository;
    
        public function __construct(movieRepositoryInterface $movieRepository)
        {
            $this->movieRepository = $movieRepository;
            $this->middleware('authadminverified')->only(['create']);
        }
    
        // this function return all movies in the three cinema
        public function index()
        {
            

          $allmovies =  $this->movieRepository->all();
            return response($allmovies, 200);
         

        }

          // this function create movies in a cinema
        public function create(Request $request)
        {
           
             $this->movieRepository->createMovie($request);
            return response()->json([
                "message" => " movie added successfully"
            ], 201); 
    
    
        }

         // this function allow authentication before adding movies and showtimes
        public function logincinema(Request $request)
        {
          
        return  $this->movieRepository->logincinema($request);
         
    
        }

          // this function return all movies belonging to a cinema
        public function read($cinema_id)
        {
           
            $cinemamovies = $this->movieRepository->getMovie($cinema_id);
            return response($cinemamovies,200);
    

        }


       
  
    }

