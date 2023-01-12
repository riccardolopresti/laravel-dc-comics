<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_comics = config('comics');

        foreach($array_comics as $comic_item){
            $new_comic = new Comic();
            $new_comic->title =$comic_item['title'];
            $new_comic->slug =Comic::SlugGenerator($new_comic->title);
            $new_comic->description =$comic_item['description'];
            $new_comic->thumb =$comic_item['thumb'];
            $new_comic->price =$comic_item['price'];
            $new_comic->series =$comic_item['series'];
            $new_comic->sale_date =$comic_item['sale_date'];
            $new_comic->type =$comic_item['type'];
            $new_comic->save();
        }

    }
}
