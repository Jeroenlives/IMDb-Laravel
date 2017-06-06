<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    static $genres = [
        "Action",
        "Comedy",
        "Romance",
        "Adventure",
        "Fantasy",
        "Animation",
        "Family",
        "Drama",
        "Horror",
        "Crime",
        "Thriller",
        "Sci-Fi",
        "Musical"
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert(self::$genres);
    }
}