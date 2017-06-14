<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    private $genres = [
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
    public function run($param = $this->genres)
    {
        foreach ($param as $genre) {
            DB::table('genres')->insert([
                'genre' => $genre
            ]);
        }
    }
}