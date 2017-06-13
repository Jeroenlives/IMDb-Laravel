<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Person extends Model
{
    public function cast()
    {
        $this->hasMany(Cast::class);
    }

    public function awards()
    {
        $this->hasMany(Award::class);
    }

    public static function getBornToday()
    {
        $celebs = DB::table(
            'persons')
            ->where(
                'birthday', Carbon::now()
                    ->toDateString()
            )
            ->get();
        return $celebs;
    }
}
