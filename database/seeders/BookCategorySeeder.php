<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $classisLiterature = Category::where('name','Classic Literature')->get()->first();
        $dystopian = Category::where('name','Dystopian Fiction')->get()->first();
        $scienceFiction = Category::where('name','Science Fiction')->get()->first();
        $sourthernGothic = Category::where('name','Southern Gothic')->get()->first();
        $fantasy = Category::where('name','Fantasy')->get()->first();
        $romance = Category::where('name','Romance')->get()->first();
        $adventure = Category::where('name','Adventure')->get()->first();
        $gothicFiction = Category::where('name','Gothic Fiction')->get()->first();
        $comingOfAge = Category::where('name','Coming-of-Age')->get()->first();
        $postApocalypticFiction  = Category::where('name','Post-Apocalyptic Fiction')->get()->first();

        $greatGatsby = Book::where('title','The Great Gatsby')->get()->first();
        $g1984 = Book::where('title','1984')->get()->first();
        $hitchHicker = Book::where('id',4)->get()->first();
        $mockingBird = Book::where('title','To Kill a Mockingbird')->get()->first();

        $myanmarLanguage = Language::where('name','Myanmar')->get()->first();
        $englishLanguage = Language::where('name','English')->get()->first();

        $greatGatsby->languages()->sync([$englishLanguage->id]);
        $g1984->languages()->sync([$englishLanguage->id]);
        $hitchHicker->languages()->sync([$englishLanguage->id,$myanmarLanguage->id]);
        $mockingBird->languages()->sync([$englishLanguage->id]);

        $classisLiterature->books()->sync([$greatGatsby->id,$mockingBird->id]);
        $dystopian->books()->sync([$g1984->id]);
        $scienceFiction->books()->sync([$hitchHicker->id]);
        $sourthernGothic->books()->sync([$mockingBird->id]);


//        $fantasy->books()->sync([]);
//        $romance->books()->sync([]);
//        $adventure->books()->sync([]);
//        $gothicFiction->books()->sync([]);
//        $comingOfAge->books()->sync([]);
//        $postApocalypticFiction->books()->sync([]);
    }
}
