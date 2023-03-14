<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// model
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // richiamo comics.php
        $comics = config('comics');

        // inserisco nel db
        foreach($comics as $singleComic){
            $newComic = new Comic;
            $newComic->title = $singleComic['title'];
            $newComic->description = $singleComic['description'];
            $newComic->thumb = $singleComic['thumb'];
            $newComic->price = $singleComic['price'];
            $newComic->series = $singleComic['series'];
            $newComic->sale_date = $singleComic['sale_date'];
            $newComic->type = $singleComic['type'];

            $newComic->save();
        }
    }
}
