<?php

namespace Modules\Showtimes\Entities;

use Illuminate\Database\Eloquent\Model;

class showtime extends Model
{
    protected $fillable = ['id','showtime','showdate','movie_id','cinema_id'];
    public function Movie()
    {
      return $this->belongsTo(Movie::class);
    }

}
