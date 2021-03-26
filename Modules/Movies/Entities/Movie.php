<?php

namespace Modules\Movies\Entities;


use Illuminate\Database\Eloquent\Model;
use Modules\Cinema\Entities\Cinema ;
use Modules\Showtimes\Entities\Showtime ;

class movie extends Model
{
    protected $fillable = ['id','movie_title', 'movie_img_url', 'showtime_id','cinema_id'];

    function Cinema() {
        return $this->belongsTo(Cinema::class);
    }
    public function Showtime()
    {
      return $this->hasMany(Showtime::class);
    }
}
