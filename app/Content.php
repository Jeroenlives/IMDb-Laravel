<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\{Series, Movie};

class Content extends Model
{
    protected $fillable = [
        'name',
        'desc',
        'storyline',
        'metascore',
        'length',
        'imdb_rating',
        'release_date'
    ];

    public function series()
    {
        return $this->hasMany(Series::class);
    }

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
