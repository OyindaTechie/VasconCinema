<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;
use Modules\Movies\Entities\Movie;


interface movieRepositoryInterface
{
    public function all();

    public function getMovie(Request $request);

    public function createMovie(Request $request);

    public function logincinema(Request $request);

}