<?php

namespace Modules\Cinema\Http\Controllers;



use App\Repositories\Interfaces\cinemaRepositoryInterface;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class CinemaController extends Controller

    {
        private $cinemaRepository;
    
        public function __construct(cinemaRepositoryInterface $cinemaRepository)
        {
            $this->cinemaRepository = $cinemaRepository;
            $this->middleware('authadminverified')->only(['getcinema']);
        }
    
        // this function get all cinemas
        public function index()
        {
            

          $allmovies =  $this->cinemaRepository->all();
            return response($allmovies, 200);
         

        }

        public function getcinema($cinemaid)
        {
            
            
         return  $this->cinemaRepository->getCinema($cinemaid);
           // return response($acinema, 200);
         

        }

        //this function create cinemas
        public function create(Request $request)
        {
           
             $this->cinemaRepository->createCinema($request);
            return response()->json([
                "message" => "cinema added successfully"
            ], 201); 
    
    
        }

      
    }

