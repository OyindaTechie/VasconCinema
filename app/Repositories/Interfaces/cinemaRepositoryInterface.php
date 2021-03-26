<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;
use Modules\Cinema\Entities\Cinema;


interface cinemaRepositoryInterface
{
    public function all();


    public function createCinema(Request $request);

    public function getCinema($cinemaid);

}