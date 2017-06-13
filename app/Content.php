<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\{Series, Movie};

class Content extends Model
{
    public function series()
    {
        return $this->hasMany(Series::class);
    }

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
