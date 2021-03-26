<?php

namespace Modules\Cinema\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Movies\Entities\Movie;
use Modules\Showtimes\Entities\Showtime;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;


class cinema extends Authenticatable
{

  use HasApiTokens, Notifiable;

    protected $fillable = ['id', 'cinema_name', 'location', 'email', 'password'];

    public function Movie()
    {
      return $this->hasMany(Movie::class);
    }

    public function Showtime()
    {
      return $this->hasMany(Showtime::class);
    }


    



    

}
