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
        $harryPoter = Book::where('id',5)->get()->first();
        $prideAnd = Book::where('id',6)->get()->first();
        $theLord = Book::where('id',7)->get()->first();
        $theCatcher = Book::where('id',8)->get()->first();
        $mobyDick = Book::where('id',9)->get()->first();
        $theChronicles = Book::where('id',10)->get()->first();
        $thePicture = Book::where('id',11)->get()->first();
        $theBraveNew = Book::where('id',12)->get()->first();
        $janeEyre = Book::where('id',13)->get()->first();
        $theHobbit = Book::where('id',14)->get()->first();
        $frankenstein = Book::where('id',15)->get()->first();
        $theRoad = Book::where('id',16)->get()->first();
        $notGiving = Book::where('id',17)->get()->first();
        $myaing = Book::where('id',18)->get()->first();

        $myanmarLanguage = Language::where('name','Myanmar')->get()->first();
        $englishLanguage = Language::where('name','English')->get()->first();

        $greatGatsby->languages()->sync([$englishLanguage->id]);
        $g1984->languages()->sync([$englishLanguage->id]);
        $hitchHicker->languages()->sync([$englishLanguage->id]);
        $mockingBird->languages()->sync([$englishLanguage->id]);
        $harryPoter->languages()->sync([$englishLanguage->id]);
        $prideAnd->languages()->sync([$englishLanguage->id]);
        $theLord->languages()->sync([$englishLanguage->id]);
        $theCatcher->languages()->sync([$englishLanguage->id]);
        $mobyDick->languages()->sync([$englishLanguage->id]);
        $theChronicles->languages()->sync([$englishLanguage->id]);
        $thePicture->languages()->sync([$englishLanguage->id]);
        $theBraveNew->languages()->sync([$englishLanguage->id]);
        $janeEyre->languages()->sync([$englishLanguage->id]);
        $theHobbit->languages()->sync([$englishLanguage->id]);
        $frankenstein->languages()->sync([$englishLanguage->id]);
        $theRoad->languages()->sync([$englishLanguage->id]);
        $notGiving->languages()->sync([$myanmarLanguage->id]);
        $myaing->languages()->sync([$myanmarLanguage->id]);


        $classisLiterature->books()->sync([$greatGatsby->id,$mockingBird->id]);
        $dystopian->books()->sync([$g1984->id]);
        $scienceFiction->books()->sync([$hitchHicker->id]);
        $sourthernGothic->books()->sync([$mockingBird->id]);
        $fantasy->books()->sync([$theHobbit->id,$theChronicles->id,$theLord->id,$harryPoter->id]);
        $romance->books()->sync([$prideAnd->id,$janeEyre->id,$myaing->id,$notGiving->id]);
        $adventure->books()->sync([$mobyDick->id]);
        $gothicFiction->books()->sync([$mockingBird->id,$thePicture->id,$janeEyre->id,$frankenstein->id]);
        $comingOfAge->books()->sync([$mockingBird->id,$theCatcher->id,]);
        $postApocalypticFiction->books()->sync([$g1984->id,$theRoad->id]);
    }
}
