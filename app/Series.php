<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    public function content()
    {
        return $this->belongsTo(Content::class);
    }

//    public static function getContent($id)
//    {
//        $contents = DB::table('content')->where('id', $id)->all();
//        return $contents;
//    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
