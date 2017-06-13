<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    public function content()
    {
        return $this->belongsTo(Content::class);
    }
    public static function getContents($id)
    {
        $contents = DB::table('contents')->where('id', $id)->all();

        return $contents;
    }
}
