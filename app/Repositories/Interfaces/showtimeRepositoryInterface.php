<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;
use Modules\Movies\Entities\Movie;


interface showtimeRepositoryInterface
{
    public function all();

    // get showtimes for a movie
    public function getShowtimeToaMovie($movie_id);

    //create showtime for movies
    public function createShowtime(Request $request);

    //update showtime for movies
    public function updateShowtime(Request $request, $id);
}